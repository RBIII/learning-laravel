<?php namespace App\Http\Controllers;

class PagesController extends Controller {

  public function home()
  {
    $name = 'Rocco';

    return view('hello')->with('name', $name);
  }
}