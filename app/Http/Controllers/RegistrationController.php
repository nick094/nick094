<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Comment;
use App\Mail\Welcome;
use App\Http\Requests\RegistrationRequest;
use Illuminate\Foundation\Http\FormRequest;


class RegistrationController extends Controller
{
    public function create() {


    	return view('registrationcreate');


    }

    public function store(RegistrationRequest $request) {

        $request->persist(); 
        session()->flash('message','Thanks for signing up');

    	return redirect()->home();
    }

}