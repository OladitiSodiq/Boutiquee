<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\custom;

class AuthController extends Controller
{
    //

    public function showLoginForm()
    {
      return view('admin.index');
    }


    public function login(Request $request){
      
      $this->validate($request, [
        'email'   => 'required|email',
        //'password' => 'required|min:6'
        'password' => 'required'
      ]);


      $adminlogin = custom::where('email', $request->input('email'))->where('role','1000')
      ->first();
      if( $adminlogin) {
        Session::put('isadmin', true);

        return redirect()->route('admin.dashboard');



      }
      else{
        return redirect()->back()->withInput($request->only('email', 'remember'))->with('error', 'Invalid Credentials');

      }
     
    }
    public function showAdminDashboard()
    {
      return view('admin.dashboard');
    }
}
