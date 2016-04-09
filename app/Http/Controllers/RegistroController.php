<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use App\Http\Requests;
use App\Http\Requests\CreateAttendeeRequest;
use App\Http\Controllers\Controller;
use App\Settings;
use App\Attendee;
use App\Children;
use Session;

class RegistroController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $settings = Settings::find(1);
        $attendeeCount = Attendee::count();
        $daycareCount = Children::count();

        return view('pages.registro.create', [
            'settings' => $settings, 
            'attendeeCount' => $attendeeCount,
            'daycareCount' => $daycareCount
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAttendeeRequest $request)
    {
        $daycarenumber = 0;
        $settings = Settings::find(1);
        $attendeeCount = Attendee::count();
        $daycareCount = Children::count();

        $attendee = new Attendee;
        $attendee->name = $request->get('name');
        $attendee->last_name = $request->get('lastname');
        $attendee->email = $request->get('email');
        $attendee->phone_number = $request->get('phonenumber');
        $attendee->waiting_list = $attendeeCount >= $settings->number_of_attendees;
        $attendee->save();

        if ($daycareCount < $settings->daycare_limit)
        {
            $needsdaycare = $request->get('needsdaycare');
            if (!empty($needsdaycare) && $needsdaycare == 'si') {
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
            }
        }

        if (!$attendee->waiting_list) 
        {
            return redirect('/registro/aceptado')->with([
                'aceptado' => 'true',
                'hayGuarderia' => $daycarenumber > 0 ? 'true' : 'false'
            ]);
        }
        else
        {
            return redirect('/registro/listaespera');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAcceptedView()
    {
        if (session('aceptado') == 'true')
        {
            $hayGuarderia = false; 
            Session()->forget('aceptado');
            
            if (session('hayGuarderia') == 'true') 
            {
                Session()->forget('hayGuarderia');
                $hayGuarderia = true; 
            }
            return view('pages.registro.aceptado', ['hayGuarderia' => $hayGuarderia]);
        }

        return redirect('/');
    }
}
