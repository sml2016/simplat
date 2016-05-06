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
use Mail;

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

        if ($settings->registration_state == 0)
        {
            return view('pages.registro.inscripcionesNoHabiertas');
        }
        elseif ($settings->registration_state == 1)
        {
            $attendeeCount = Attendee::count();
            $daycareCount = Children::count();

            return view('pages.registro.create', [
                'settings' => $settings, 
                'attendeeCount' => $attendeeCount,
                'daycareCount' => $daycareCount
            ]);            
        }
        else
        {
            return view('pages.registro.inscripcionesCerradas');
        }
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
        $fullname = $attendee->name.' '.$attendee->last_name;

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
            if ($daycarenumber > 0)
            {
                $this->sendMail('emails.registroemailnino', 'Confirmación del registro del 3er. Simposio de Mujeres Latinas', $attendee->email, $fullname);
            }
            else
            {
                $this->sendMail('emails.registroemail', 'Confirmación del registro del 3er. Simposio de Mujeres Latinas', $attendee->email, $fullname);
            }

            return redirect('/registro/aceptado')->with([
                'aceptado' => 'true',
                'hayGuarderia' => $daycarenumber > 0 ? 'true' : 'false'
            ]);
        }
        else
        {
            $this->sendMail('emails.registrolistaemail', 'Confirmación de la lista de espera del 3er. Simposio de Mujeres Latinas', $attendee->email, $fullname);
            return redirect('/registro/listaespera')->with([
                'listadeespera' => 'true'
            ]);
        }
    }

    /**
     * Sends a mail with template
     */
    public function sendMail($mailTemplate, $title, $email, $name)
    {
        $simposioEmail = env('MAIL_USERNAME');

        Mail::send($mailTemplate, [], function ($m) use ($title, $email, $simposioEmail, $name) {
            $m->from($simposioEmail, 'Simposio Mujeres Latinas');
            $m->to($email, $name)->subject($title);
        });
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getWaitingListView()
    {
        if (session('listadeespera') == 'true')
        {
            Session()->forget('listadeespera');

            return view('pages.registro.listaespera');
        }

        return redirect('/');
    }
}
