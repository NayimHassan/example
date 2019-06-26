<?php

namespace App\Http\Controllers;

use App\sinthia;
use Illuminate\Http\Request;

class SinthiaController extends Controller
{
    public function ind (){
        return view ('sinthia');
    }
    public function reg()
    {
        $this-> validate (request(),[
            'username' =>'required|min:4',
            'email' =>'email|required',
            'password'=>'required|min:4|confirmed']);


       sinthia::create ([
            'username'=>request ('username'),
            'password'=>bcrypt (request ('password')),
            'email'  =>request ('email'),
        ]);

        return ('complete registration');

    }
}
