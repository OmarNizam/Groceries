<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grocery;

use Exception;

class GroceriesController extends Controller
{
  // middleware : the unauth user cant navigate to create and store
  public function __construct()
  {
      $this->middleware('auth')->except(['index', 'show']);
  }


  public function index()
  {
    $groceries = Grocery::latest()->get();
    return view('groceries.index', compact('groceries'));
  }


  public function show(Grocery $grocery)
  {
    return view('groceries.show', compact('grocery'));
  }


  public function create()
  {
    return view('groceries.create');
  }


  public function store(Request $request)
  {
    // validate
    $this->validate(request(), [
      'name' => 'required'
    ]);
    //get the file name from the image object and  add time to the extention then create folder and move the image to it
    $image = $request->file('photo');
    $filename = null;
    if ($image !== null)
    {
    $filename = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images');
    $image->move($destinationPath, $filename);
    }
    //cearte and save
    Grocery::create([
      'name' => request('name'),
      'amount' => request('amount'),
      'photo' => $filename ,   // the new image name with the time()
      'user_id' => auth()->user()->id
    ]);
    // redirect
    return redirect()->home();
  }


  public function edit(Grocery $grocery)
  {
    if ($grocery->modify())
    {
    return view('groceries.edit', compact('grocery'));
    }
    throw new Exception("You are not allowed...", 1);
  }


  public function update(Grocery $grocery, Request $request)
  {
    // validate
    $this->validate(request(), [
      'name' => 'required'
    ]);

    $image = $request->file('photo');
    $filename = null;
    if ($image !== null)
    {
    $filename = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images');
    $image->move($destinationPath, $filename);
    }
    $input = [
      'name' => request('name'),
      'amount' => request('amount'),
      'photo' => $filename ,
    ];


   $grocery->fill($input)->save();
  //  Redirect
    return redirect()->home();

  }


  public function destroy(Grocery $grocery)
  {
    if ($grocery->delete())
    {
     return back();
    }
  }

}
