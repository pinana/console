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


    public function edit($id)
    {
$aet= aets::find($id);
        return view('datos.edit', compact('aet'));

    }

    public function update(Request $request, $id)
    {
        $aet= aets::find($id);
        $aetupdate= $request->all();
        $aet->update($aetupdate);
        return redirect()->route('datos.index')->with('message', 'iten ha sido añadido');

    }


    public function destroy($id)
    {
        $aet = aets::findOrFail($id);

        $aet->delete($id);



        return redirect()->route('datos.index');
    }


    public function PING($id)
    {
        $aet = aets::findOrFail($id);

        $aet->delete($id);



        return redirect()->route('datos.index');
    }
}
