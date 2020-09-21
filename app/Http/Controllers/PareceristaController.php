<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PareceristaController extends Controller
{
    public function create(){
        return view('pareceristas.create');//pasta parecerista, arquivo create.blade.php
    }
    public function store(Request $request){
        
        echo ($request->numero_usp) . ' - ';
        echo ($request->nome);
        dd('Está funcionando');
    }
}
