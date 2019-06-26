<?php

namespace App\Http\Controllers;


use App\Post;
use Illuminate\Http\Request;

class RegisterController extends Controller
{


    /**
     * @return string
     */
    public function index (){
        return view ('register');
    }
    public function register()
    {
        $this-> validate (request(),[
            'username' =>'required|min:4',
            'email' =>'email|required',
            'password'=>'required|min:4|confirmed']);


        post::create ([
            'username'=>request ('username'),
            'password'=>bcrypt (request ('password')),
            'email'  =>request ('email'),
        ]);

        return ('complete registration');

    }
}

