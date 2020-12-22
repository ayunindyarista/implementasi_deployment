<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
    	return view('layout/index');
    }

    public function body(){
        return view('layout/body');
    }

    public function Login(){
        return view('authorization/Login');
    }

}