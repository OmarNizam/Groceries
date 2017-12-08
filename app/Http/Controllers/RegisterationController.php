<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegisterationController extends Controller
{

  public function create()
  {
    return view('registration.create');
  }

  public function store()
  {
    // validate the form
    $this->validate(request(), [
      'name' => 'required',
      'email' => 'required|email',
      'password' => 'required|confirmed|min:6'
    ]);
    $user = User::create([
      'name' => request('name'),
      'email' => request('email'),
      'password' => bcrypt(request('password')),
    ]);
    // sign them in
    auth()->login($user);
    // Redirect to the home page
    return redirect()->home();
  }

}
