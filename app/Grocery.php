<?php

namespace App;

use Illuminate\Support\Facades\Auth;

class Grocery extends Model
{
  // 
  public $fillable = ['name', 'amount'];



  public function user()
  {
    return $this->belongsTo(User::class);
  }


  public function modify()
  {
    if (Auth::check() && auth()->user()->admin == true)
    {
        return true;
    }
    if (Auth::check() && auth()->user()->id == $this->user_id) {
      return true;
    }
    return false;
  }


}
