<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NavegacionController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function acercaNosotros()
    {
        return view('acercaNosotros');
    }

    public function servicios()
    {
        return view('servicios');
    }
    public function client_pro()
    {
        return view('client_pro');
    }
    public function vista_bolsa()
    {
        return view('vista_bolsa');
    }
    public function vistaAuto()
    {
        return view('vistaAuto');
    }
    public function vistaIE()
    {
        return view('vistaIE');
    }
    public function vistaPaileria()
    {
        return view('vistaPaileria');
    }
    public function vistaDM()
    {
        return view('vistaDM');
    }
    public function vistaIP()
    {
        return view('vistaIP');
    }
    public function vistaRobotica()
    {
        return view('robotica');
    }
}
