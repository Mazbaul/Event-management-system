<?php

namespace App\Http\Controllers;
use App\Event;
use App\Hallmap;
use Illuminate\Http\Request;

class ReservationController extends Controller
{


    public function reserve($eventid,$seat,$type)
    {

      $hallmap=Hallmap::Where([['event_id','=',$eventid]])->first();



       return view('adminlte::booking',compact('hallmap','seat','type'));

     }

     public function store($eventid,$seat,$type)
     {


        return view('adminlte::booking');

      }
}
