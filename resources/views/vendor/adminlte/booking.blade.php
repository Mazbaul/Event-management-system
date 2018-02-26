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

<div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="row">
              <div  class="col-md-4 col-md-offset-5" >

             <h1>{{$hallmap->event->name}} </h1>
           </div>
           </div>
            <h3>Book <strong>{{$type}}</strong> Seat Number <strong>{{$seat}}</strong> </h3>

            {!! Form::open(['route' => 'bookseat.store']) !!}

            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name', null, ['class' => 'form-control','placeholder'=>'type name']) }}

            {{ Form::label('address', 'Address:') }}
            {{ Form::text('address', null, ['class' => 'form-control','placeholder'=>'type parmanent address']) }}




						{{ Form::label('phone', 'phone number:') }}
            {{ Form::number('phone', null, ['class' => 'form-control','placeholder'=>'type phone Number']) }}

            {{ Form::submit('Submit', array('class' => 'btn btn-primary btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
            {!! Form::close() !!}

        </div>
    </div>
    <script type="text/javascript">





    </script>


    </body>
    </html>
