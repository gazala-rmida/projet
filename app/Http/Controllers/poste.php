<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class poste extends Controller
{
    //
    public function index(){
           $p = \App\Model\poste::all();
       // return view ('poste');
        return view('poste',['postes'=>$p]);
    }
}
