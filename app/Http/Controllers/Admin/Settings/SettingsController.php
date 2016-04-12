<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Settings;
use App\Http\Requests\UpdateSettingsRequest;

class SettingsController extends Controller
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
     * Show the settings list.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Settings::find(1);
        return view('admin.settings.index', ['settings' => $settings]);
    }

    /**
     * Show edit settings form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showEditForm()
    {
        $settings = Settings::find(1);
        return view('admin.settings.edit', ['settings' => $settings]);
    }

    /**
     * Updates the system settings.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSettingsRequest $request)
    {
        $settings = Settings::find(1);
        $settings->number_of_attendees = $request->get('numberAttendees');
        $settings->daycare_limit = $request->get('numberChildren');
        $settings->daycare_min_age = $request->get('minAge');
        $settings->daycare_max_age = $request->get('maxAge');
        $settings->registration_state = $request->get('registrationState');
        $settings->save();

        return redirect('/admin/settings');
    }
}
