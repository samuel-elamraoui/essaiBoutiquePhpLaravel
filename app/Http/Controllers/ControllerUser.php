<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerUser extends Controller

{
    public function create(){
        return view('user.create');
    }

    public function confirmSave (){
        return view('user.confirmSave');
    }

    public function login (){
        return view('user.login');
    }

}


