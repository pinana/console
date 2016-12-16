<?php

namespace App\Http\Controllers;

use App\aets;
use Illuminate\Http\Request;

use App\Http\Controllers\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\NodoRequest;

class CardsController extends Controller
{
   public function index()
   { $aets = DB::table('aets')->get();
       return view('test', compact('aets'));
   }

    public function create()
    {
        return view('datos.create');

    }

    public function store(NodoRequest $request)
    {
        aets::create($request->all());
        return redirect()->route('datos.index')->with('message', 'iten ha sido añadido');

    }
}
