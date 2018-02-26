<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>








</head>


<body >
<div class="container">
  <div class="row">
      <div  class="col-md-4 col-md-offset-5" >
      <h2>{{$hallmap->event->name}}  </h2>
      </div>

      <div  class="col-md-6 col-md-offset-3" >
      <h3> Place/Location : {{$hallmap->event->location}} </h3>
      <h3> Date :{{date('M j, Y',strtotime($hallmap->event->date))}}</td>
 </h3>
      <h3> Time :  {{date('h:i a',strtotime($hallmap->event->time))}}</h3>
      </div>
  </div>

    <div class="row">
        <div  class="well col-md-8 col-md-offset-2" style="background-color:#d59bc2;">
          <div class="row" >
           <div class="col-md-8 col-md-offset-5" >
            <h4> VIP STAND  </h4>
          </div>
          </div>

          <?php
          $vip= $hallmap->vip;
          $type='vip';
          $eventid=$hallmap->event_id;
           ?>
        <table>
          @for($i =1; $i <= $vip; $i++)

           <a href="{{ !(App\Bookinginfo::where([['type', '=' ,$type],['event_id','=',$eventid],['seat_num','=',$i]])->count())? route('bookseat',array($eventid,$i,$type)) : ""}}">
            <div  class="well well-sm col-md-1 col-md-offset-1" style="{{ !(App\Bookinginfo::where([['type', '=' ,$type],['event_id','=',$eventid],['seat_num','=',$i]])->count())? "" : "background-color:#d71149"}}">
                          <h3>  {{$i}}</h3>

            </div>
          </a>

          @endfor
        </table>
        </div>
      </div>
      <div class="row" >
        <div  class="well col-md-8 col-md-offset-2" style="background-color:#75c1e2;">

          <div class="row" >
           <div class="col-md-8 col-md-offset-5" >
            <h4> General STAND  </h4>
          </div>
        </div>
            <?php $gn= $hallmap->general;
            $typ='General';
            $eventid=$hallmap->event_id;
             ?>
            @for($i =1; $i <= $gn; $i++)

            <a href="{{ !(App\Bookinginfo::where([['type', '=' ,$typ],['event_id','=',$eventid],['seat_num','=',$i]])->count())? route('bookseat',array($eventid,$i,$typ)) : ""}}">
              <div  class="well well-sm col-md-1 col-md-offset-1" style="{{ !(App\Bookinginfo::where([['type', '=' ,$typ],['event_id','=',$eventid],['seat_num','=',$i]])->count())? "" : "background-color:#d71149"}}">
                          <h3>  {{$i}}</h3>

            </div></a>
            @endfor
        </div>
    </div>
    <div class="row">
        <div id="bookplace" class="col-md-2">

        </div>
    </div>

</div>
<script type="text/javascript">





</script>


</body>
</html>
