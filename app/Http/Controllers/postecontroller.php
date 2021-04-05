<?php

namespace App\Http\Controllers;
use App\Model\poste;
use Illuminate\Http\Request;

class postecontroller extends Controller
{
    //
    public function index(){
        $p = poste::all();
    // return view ('poste');
     return view('poste',['postes'=>$p]);
 }
}
