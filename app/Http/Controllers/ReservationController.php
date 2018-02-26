<?php

namespace App\Http\Controllers;
use App\Event;
use App\Hallmap;
use App\Bookinginfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class ReservationController extends Controller
{


    public function reserve($eventid,$seat,$type)
    {

      $hallmap=Hallmap::Where([['event_id','=',$eventid]])->first();
      return view('adminlte::booking',compact('hallmap','seat','type'));

     }

     public function store(Request $request)
     {
       $this->validate($request, array(
                   'name'=>'required',
                   'email'=>'required|email',
                  'phone'=>'required',
                  'address'=>'required',
                    'event_id'=>'required',
                    'seat'=>'required',
                    'type'=>'required',

               ));

          $bookinginfo=new Bookinginfo();
          $bookinginfo->name=$request->name;
          $bookinginfo->email=$request->email;
          $bookinginfo->phn_num=$request->phone;
          $bookinginfo->address=$request->address;
          $bookinginfo->event_id=$request->event_id;
          $bookinginfo->seat_num=$request->seat;
          $bookinginfo->type=$request->type;
       if (!(Bookinginfo::where([['type', '=' ,$request->type],['event_id','=',$request->event_id],['seat_num','=',$request->seat]])->count())) {
         $bookinginfo->save();
       }


          Session::flash('success','New Department Added Succesfully');
          return redirect()->route("hallmaps.show","$request->eventname");
      }
}
