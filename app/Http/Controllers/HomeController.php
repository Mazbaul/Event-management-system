<?php

namespace App\Http\Controllers;
use App\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  //  public function __construct()
  //  {
    //    $this->middleware('guest');
    //}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $event=Event::all();
    return view('home')->withEvent($event);
    }
}
