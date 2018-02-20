<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Event;
Use App\Hallmap;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
          return view('adminlte::admin');
    }

    public function store(Request $request)
    {
      $this->validate($request, array(
        'name'=>'required',
        'location'=>'required',
        'lat'=>'required',
        'lng'=>'required',
        'date'=>'required',
        'time'=>'required',



    ));

    $event = new Event();
    $event->name = $request->name;
    $event->location = $request->location;
    $event->lat = $request->lat;
    $event->lng = $request->lng;
    $event->date = $request->date;
    $event->time = $request->time;

    $event->save();

    $hallmap=new Hallmap();
    $hallmap->event_id=$event->id;
    $hallmap->vip=$request->vip;
    $hallmap->general=$request->general;

    $hallmap->save();

    Session::flash('success','Notice Created Succesfully');
    return redirect()->route('createevent');
    }

}
