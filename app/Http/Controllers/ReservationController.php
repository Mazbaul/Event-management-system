<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
  public function index($id)
  {
    $event=Event::Where([['name','=',$request]])->get()->pluck('id');
    $hallmap=Hallmap::Where([['event_id','=',$event]])->first();
    return view('hallmaps')->withHallmap($hallmap);
  }
}
