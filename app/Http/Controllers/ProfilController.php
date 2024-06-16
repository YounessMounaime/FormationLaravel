<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
  public function index(Request $request){
  
    $tous_profiles =  Profile::paginate(5);
    return View('profile',compact('tous_profiles'));
    
  }

  public function show(Request $request){
    $id = $request->id;
    $profile = Profile::find($id);
    if($profile == null){
      return abort(404);
    }
    return View('show',compact('profile'));
  }


public function create(){
  return View('create');
}

public function store(Request $request) {
  $name = $request->name;
  $email = $request->email;
  $password = $request->password;
  $bio = $request->bio;

  Profile::create([
      'name' => $name,
      'email' => $email,
      'password'=>$password,
      'bio' => $bio,
  ]);

  return redirect()->back();
}




}
