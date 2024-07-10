<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginBasic extends Controller
{
  public function index()
  {
    return view('content.authentications.auth-login-basic');
  }

  public function logout(Request $request){
    // logout itu harus menghapus session nya 

    $request->session()->flush();

    Auth::logout();

    return Redirect('/auth/login');
}
}
