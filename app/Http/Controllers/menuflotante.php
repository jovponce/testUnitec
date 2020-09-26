<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class menuflotante extends Controller
{
    //
    public function genero()
    {
        $genero = DB :: table('genero') -> get();

        return $genero;
    }
    public function estado()
    {
        $ecivil = DB :: table('ecivil') -> get();

        return $ecivil;
    }
    public function interes()
    {
        $n_interes = DB :: table('n_interes') -> get();
        return $n_interes;
    }

    public function subinteres(Request $request){
        //$data = $request->input('name');
        $data = DB::table('sub_interes')->where('id_interes', $request->input('id'))->get();
        return $data;
    }
}
