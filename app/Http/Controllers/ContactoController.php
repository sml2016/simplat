<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

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
            'name' => 'required|string|min:5|max:100',
            'email' =>'required|email',
            'title' => 'required|string|min:1|max:255',
            'message' => 'required|string|min:1|max:255',
        ]);

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
