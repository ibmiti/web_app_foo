<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooContoller extends Controller
{

  public function admin_list(Request $request){
      // we can attempt to retrieve the object out of request
      // then give them individually back to /admin
    return view('admin.user',[]);
  }


}
