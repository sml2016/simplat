<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'showLoginForm']);
    }

    /**
     * Show login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
    	return view('admin.auth.login');
    }
}
