<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controllers;
use Illuminate\Support\Facades\DB;

class CardsController extends Controller
{
   public function index()
   { $aets = DB::table('aets')->get();
       return view('datos.index', compact('aets'));
   }
}
