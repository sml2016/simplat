<?php

namespace App\Http\Controllers\Admin\Attendees;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\CreateAttendeeAdminRequest;
use App\Http\Requests\UpdateAttendeeRequest;
use App\Attendee;
use App\Settings;
use App\Children;

class AttendeesController extends Controller
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
     * Show the user list.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendees = Attendee::All();

        return view('admin.attendees.index', ['attendees' => $attendees]);
    }

    /**
     * Shows the create attendee form
     *
     * @return \Illuminate\Http\Response
     */
    public function showCreateForm()
    {
        $settings = Settings::find(1);
        return view('admin.attendees.create', ['settings' => $settings]);
    }

    /**
     * Creates a new user
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAttendeeAdminRequest $request)
    {
        $attendee = new Attendee;
        $attendee->name = $request->get('name');
        $attendee->last_name = $request->get('lastname');
        $attendee->email = $request->get('email');
        $attendee->phone_number = $request->get('phonenumber');
        $attendee->save();

        $daycarenumber = $request->get('daycarenumber');
        if ($daycarenumber > 0 && $daycarenumber <= 2)
        {
            if ($daycarenumber >= 1)
            {
                $child = new Children;
                $child->name = $request->get('child1name');
                $child->last_name = $request->get('child1lastname');
                $child->sex = $request->get('child1sex');
                $child->age = $request->get('child1age');
                $child->attendee_id = $attendee->id;
                $child->save();
            }
            if ($daycarenumber == 2)
            {
                $child = new Children;
                $child->name = $request->get('child2name');
                $child->last_name = $request->get('child2lastname');
                $child->sex = $request->get('child2sex');
                $child->age = $request->get('child2age');
                $child->attendee_id = $attendee->id;
                $child->save();
            }
        }

        return redirect('/admin/attendees');
    }

    /**
     * delete attendee
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteAttendee($id)
    {
        $attendee = Attendee::find($id);
        if ($attendee != null) {
            Children::Where('attendee_id', $attendee->id)->delete();
            $attendee->delete();
        }
        return redirect('/admin/attendees');
    }

    /**
     * delete all attendees
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteAllAttendees()
    {
        Children::truncate();
        Attendee::truncate();
        return redirect('/admin/attendees');
    }

    /**
     * Shows the attendee view
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $attendee = Attendee::find($id);

        if ($attendee == null)
        {
            return redirect('/admin/attendees');
        }

        $children = Children::Where('attendee_id', $attendee->id)->get();

        return view('admin.attendees.show', ['attendee' => $attendee, 'children' => $children]);
    }

    /**
     * Shows the create attendee form
     *
     * @return \Illuminate\Http\Response
     */
    public function showEditForm($id)
    {
        $attendee = Attendee::find($id);
        return view('admin.attendees.edit', ['attendee' => $attendee]);
    }

    /**
     * Updates an attendees infomation
     *
     * @return \Illuminate\Http\Response
     */
    public function update($id, UpdateAttendeeRequest $request)
    {
        $attendee = Attendee::find($id);

        if ($attendee == null)
        {
            return redirect('/admin/attendees');
        }

        $attendee->name = $request->get('name');
        $attendee->last_name = $request->get('lastname');
        $attendee->email = $request->get('email');
        $attendee->phone_number = $request->get('phonenumber');
        $attendee->waiting_list = $request->get('waitinglist');
        $attendee->save();

        return redirect('/admin/attendees/'.$id);
    }
}
