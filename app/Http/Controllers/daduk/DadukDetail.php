<?php

namespace App\Http\Controllers\daduk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DadukDetail extends Controller
{
  public function index()
  {
    return view('content.daduk.daduk-detail');
  }
}