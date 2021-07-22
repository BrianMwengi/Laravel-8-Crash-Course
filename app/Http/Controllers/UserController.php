<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
      public function index(Request $request) {
        //return [1, 2, 3];
        //return response('webdevtrainee.com', 200)
                  //->header('Content-Type', 'text/plain');
        $users = User::all();  
        if ($request->session()->has('users')) {
         
     }
        return view('user', ['name' => 'Brian'], compact('users'));
     }

     public function post(Request $request) {   
         return $request->input();  
        //return back()->withInput();
     }
}
