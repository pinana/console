<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function home()
    {

$nodos = ['ip', 'aet', 'port'];
    return view('nodos', compact('nodos'));
    }



    public function about()
    {

        $nodos = ['about', 'aet', 'port'];
        return view('about', compact('nodos'));
    }

    public function bootstrap()
    {


        return view('firstbootstrap');
    }
}