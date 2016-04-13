<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Redirect;

class HomeController extends Controller
{
    /**
     * Display home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * Display conferencistas page.
     *
     * @return \Illuminate\Http\Response
     */
    public function conferencistasView()
    {
        return view('pages.conferencistas');
    }

    /**
     * Display patrocinanos page.
     *
     * @return \Illuminate\Http\Response
     */
    public function patrocinanosView()
    {
        return view('pages.patrocinanos');
    }

    /**
     * Display patrocinadores page.
     *
     * @return \Illuminate\Http\Response
     */
    public function patrocinadoresView()
    {
        return view('pages.patrocinadores');
    }

    /**
     * Display involucrate page.
     *
     * @return \Illuminate\Http\Response
     */
    public function involucrateView()
    {
        return view('pages.involucrate');
    }

    /**
     * Display noticias page.
     *
     * @return \Illuminate\Http\Response
     */
    public function noticiasView()
    {
        return view('pages.noticias');
    }

    /**
     * Display conocenos page.
     *
     * @return \Illuminate\Http\Response
     */
    public function conocenosView()
    {
        return view('pages.conocenos');
    }

    /**
     * Sets english locale.
     *
     * @return \Illuminate\Http\Response
     */
    public function setLocalEn()
    {
        Session::set('locale', 'en');
        return Redirect::back();
    }

    /**
     * Sets spanish locale.
     *
     * @return \Illuminate\Http\Response
     */
    public function setLocalEs()
    {
        Session::set('locale', 'es');
        return Redirect::back();
    }

    /**
     * Display historia page.
     *
     * @return \Illuminate\Http\Response
     */
    public function historiaView()
    {
        return view('pages.historia');
    }

    /**
     * Display testimonios page.
     *
     * @return \Illuminate\Http\Response
     */
    public function testimoniosView()
    {
        return view('pages.testimonios');
    }

    /**
     * Display grupos page.
     *
     * @return \Illuminate\Http\Response
     */
    public function gruposView()
    {
        return view('pages.grupos');
    }

    /**
     * Display galeria page.
     *
     * @return \Illuminate\Http\Response
     */
    public function galeria2014View()
    {
        return view('pages.galeria2014');
    }

    /**
     * Display galeria page.
     *
     * @return \Illuminate\Http\Response
     */
    public function galeria2015View()
    {
        return view('pages.galeria2015');
    }

    /**
     * Display conferencias 2014 page.
     *
     * @return \Illuminate\Http\Response
     */
    public function conferencias2014View()
    {
        return view('pages.simposio.2014');
    }

    /**
     * Display conferencias 2015 page.
     *
     * @return \Illuminate\Http\Response
     */
    public function conferencias2015View()
    {
        return view('pages.simposio.2015');
    }
}
