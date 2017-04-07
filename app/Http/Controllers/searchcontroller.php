<?php

namespace App\Http\Controllers;

use App\aets;
use Illuminate\Http\Request;

use App\Http\Controllers\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\NodoRequest;
use Illuminate\Support\Facades\Input;


class searchcontroller extends Controller



{


    public function __construct()
    {

    }

    function search(Request $request)

    {$PRUEBA="HJGF";

            $NAME = $request->input('NAME');

        $input = $request->all();
        $ID = $request->input('ID');

        $AN = $request->input('AN');
        $tags = $request->input('my-se');
        $modality = $request->input('modality');
        $stardate = $request->input('start');
        $enddate = $request->input('end');





        var_dump($input,  $ID, $NAME, $AN, $tags, $modality, $stardate, $enddate, $PRUEBA );




    }


    function aets(Request $request){
        $data = Input::get('ch');
        return $data;

    }
}
