<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Http\Requests\regRequest;


class 	RegistrationController extends Controller

    {

     public function index()
        {
        return view('registration.signup');
    }

   public function verify(regRequest $req){
       $user = new User;
        $user->username = $req->username;
        $user->first_name = $req->first_name;
        $user->last_name = $req->last_name;
        $user->email = $req->email;
        $user->role = $req->role;
        $user->image ="";
        $user->password =$req->password;
        $user->is_active="1";
        $user->save();
        return redirect('/login');
    }

     
    }


