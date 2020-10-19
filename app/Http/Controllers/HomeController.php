<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

  public function index(){
    return view('home');
  }

  // this will return the basic view
    public function contact_page(){
      return view('contact');
    }

    public function contact_post(Request $request){
      $first_name = $request->input('first_name');
      $last_name  = $request->input('last_name');
      $email      = $request->input('email');

      return view('home', ['first_name'=> $first_name,'last_name' => $last_name,
      'email' => $email]);

    }

}
