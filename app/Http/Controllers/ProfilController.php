<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
  public function index(Request $request){
  

    return View('profile');
  }
}
