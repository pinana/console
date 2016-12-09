<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controllers;

class CardsController extends Controller
{
   public function index()
   {
       return view('cards.index');
   }
}
