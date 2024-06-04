<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class salamController extends Controller
{
    public function index(Request $request){
      $nom = $request->nom;
      $age = $request->age;
      $nbr = (int)$request->nbr;


      return view('welcome',compact('nom','age','nbr'));
    }



}
