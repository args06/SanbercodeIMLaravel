<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class AuthController extends BaseController
{
    public function index()
    {
        return view('form');
    }

    public function welcome(Request $request){
        $name = $request->firstName ." ". $request->lastName;
        return view('welcome',['name' => $name]);
    }
}
