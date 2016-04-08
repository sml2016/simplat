<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Mail;

class ContactoController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.contacto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [ 
            'name' => 'required|string|min:2|max:100',
            'email' =>'required|email',
            'title' => 'required|string|min:1|max:255',
            'message' => 'required|string|min:1|max:255',
        ]);

        $name = $request->get('name');
        $email = $request->get('email');
        $title = $request->get('title');
        $messageBody = $request->get('message');

        $simposioEmail = env('MAIL_USERNAME');

        Mail::send('emails.contacto', ['name' => $name, 'email' => $email, 'title' => $title, 'messageBody' => $messageBody], function ($m) use ($title, $email, $simposioEmail, $name) {
            $m->from($simposioEmail, 'Mandado por '.$name);
            $m->replyTo($email, $name);

            $m->to($simposioEmail, 'Contactanos simposio de mujeres latinas')->subject('CONTACTANOS: '.$title);
        });

        return redirect('/contacto/enviado')->with('enviado', 'true');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSentView()
    {
        if (session('enviado') == 'true')
        {
            Session()->forget('enviado');
            return view('pages.contacto.enviado');
        }

        return redirect('/');
    }
}
