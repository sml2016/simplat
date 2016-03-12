<?php

namespace App\Http\Controllers\Admin\Daycare;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\CreateAttendeeRequest;
use App\Children;
use App\Attendee;

class DaycareController extends Controller
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
     * Show the children list.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $children = Children::All();

        return view('admin.daycare.index', ['children' => $children]);
    }

    /**
     * delete Child
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteChild($id)
    {
        $child = Children::find($id);
        if ($child != null) {
            $child->delete();
        }
        return back();
    }

    /**
     * Show the child information.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $child = Children::find($id);

        if ($child == null)
        {
            return redirect('/admin/daycare');
        }

        $mother = Attendee::find($child->attendee_id);

        return view('admin.daycare.show', ['child' => $child, 'mother' => $mother]);
    }

    /**
     * Show edit form
     *
     * @return \Illuminate\Http\Response
     */
    public function showEditForm($id)
    {
        $child = Children::find($id);
        if ($child == null) {
            return redirect('/admin/daycare');
        }
        return view('admin.daycare.edit', ['child' => $child]);
    }
}
