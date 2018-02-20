@extends('adminlte::layouts.app')




@section('main-content')
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New events</h1>

            {!! Form::open(['route' => 'createevent.store']) !!}

            {{ Form::label('name', 'Name of Event:') }}
            {{ Form::text('name', null, ['class' => 'form-control','placeholder'=>'type student name']) }}

            {{ Form::label('location', 'Location And Place:') }}
            {{ Form::text('location', null, ['class' => 'form-control','placeholder'=>'type student father name']) }}

            {{ Form::label('lat', 'Lattitude:') }}
            {{ Form::text('lat', null, ['class' => 'form-control','placeholder'=>'type student mother name']) }}

            {{ Form::label('lng', 'Langtitude:') }}
            {{ Form::text('lng', null, ['class' => 'form-control','placeholder'=>'type parmanent address']) }}


            {{ Form::label('date', 'Date:') }}
            {{ Form::date('date', null, ['class' => 'form-control','placeholder'=>'type mobile number']) }}

						{{ Form::label('time', 'Time:') }}
						{{ Form::Time('time', null, ['class' => 'form-control','placeholder'=>'type mobile number']) }}

						{{ Form::label('vip', 'VIP SEAT:') }}
            {{ Form::number('vip', null, ['class' => 'form-control','placeholder'=>'type parmanent address']) }}

						{{ Form::label('general', 'General Seat:') }}
						{{ Form::text('general', null, ['class' => 'form-control','placeholder'=>'type parmanent address']) }}

            {{ Form::submit('Create Event', array('class' => 'btn btn-primary btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
            {!! Form::close() !!}

        </div>
    </div>
@endsection
