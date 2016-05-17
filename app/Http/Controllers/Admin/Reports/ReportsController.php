<?php

namespace App\Http\Controllers\Admin\Reports;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Children;
use App\Attendee;
use App\Settings;

class ReportsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * show the list of registered people
     *
     * @return \Illuminate\Http\Response
     */
    public function registeredView()
    {
        $attendees = Attendee::where('waiting_list', '=', false)->orderBy('last_name', 'ASC')->get();

        return view('admin.reports.registered', [ 'attendees' => $attendees ]);
    }

    /**
     * show the list of registered people
     *
     * @return \Illuminate\Http\Response
     */
    public function waitingListView()
    {
        $attendees = Attendee::where('waiting_list', '=', true)->orderBy('last_name', 'ASC')->get();

        return view('admin.reports.waitinglist', [ 'attendees' => $attendees ]);
    }    
}
