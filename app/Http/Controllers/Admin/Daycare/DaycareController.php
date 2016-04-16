<?php

namespace App\Http\Controllers\Admin\Daycare;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\UpdateChildRequest;
use App\Children;
use App\Attendee;
use App\Settings;

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
        $settings = Settings::find(1);
        $child = Children::find($id);

        if ($child == null) {
            return redirect('/admin/daycare');
        }
        return view('admin.daycare.edit', ['child' => $child, 'settings' => $settings]);
    }

    /**
     * Update the Child information
     *
     * @return \Illuminate\Http\Response
     */
    public function update($id, UpdateChildRequest $request)
    {
        $child = Children::findOrFail($id);
        $child->name = $request->get('name');
        $child->last_name = $request->get('lastName');
        $child->sex = $request->get('sex');
        $child->age = $request->get('age');
        $child->waiting_list = $request->get('waitinglist');
        $child->save();
        
        return redirect('/admin/daycare/'.$id);
    }

    /**
     * Gets the view to add a child for a mother
     *
     * @return \Illuminate\Http\Response
     */
    public function getAddChildView($id)
    {
        $settings = Settings::find(1);
        $mother = Attendee::find($id);

        if ($mother == null)
        {
            return redirect('/admin/');
        }

        return view('admin.daycare.create', ['mother' => $mother, 'settings' => $settings]);
    }

    public function addChild($id, UpdateChildRequest $request)
    {
        $mother = Attendee::find($id);
        if (!$mother)
        {
            return redirect('/admin/');
        }

        $child = new Children;
        $child->name = $request->get('name');
        $child->last_name = $request->get('lastName');
        $child->sex = $request->get('sex');
        $child->age = $request->get('age');
        $child->waiting_list = $request->get('waitinglist');
        $child->attendee_id = $id;
        $child->save();

        return view('admin.daycare.show', ['child' => $child, 'mother' => $mother]);
    }
}
