<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        return view('index');
    }
}