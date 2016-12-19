<?php

namespace App\Http\Controllers;
use App\aets;
use Illuminate\Http\Request;

use App\Http\Controllers\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\NodoRequest;

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
        $aets = DB::table('aets')->get();
        return view('firstbootstrap', compact('aets'));



    }
}