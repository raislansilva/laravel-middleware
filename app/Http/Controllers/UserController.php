<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{     
     //chama o middleware so para esse controller
    /*public function  __construct(){
        $this->middleware('first');
    }*/

    public function index(){
        return "<h2>Raislan</h2>";
    }
}
