@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<!-- Default box -->

				<!-- /.box -->

			</div>
		</div>
		<div class="row">
      <div class="col-md-8 text-left" style="text-align:left;margin-bottom:10px;">

      <h4><strong>Available Events</strong></h4>

      </div>
			<div class="col-md-4 text-right">
			<div class="input-group">
              <input type="text" name="student_id" class="form-control" placeholder="Events Tittle..."/>
            <span class="input-group-btn">
              <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
            </span>
          </div>
				</div>
    </div>
		<div class="row">
         <div class="col-md-12">
             <table class="table table-responsive  table-striped table-bordered table-hover">
                 <thead style="background-color:#d9edf7;">

                    <th>Tittle</th>
                    <th>Location</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Total VIP seat</th>
										<th>Total GENERAL seat</th>
										<th></th>

                 </thead>
                 <tbody>
                   @foreach($events as $event)
                       <tr >

                           <td>{{$event->name}}</td>
													 <td>{{$event->location}}</td>
                           <td>{{date('M j, Y',strtotime($event->date))}}</td>
													 <td>{{date('h:i a',strtotime($event->time))}}</td>
													 <td>{{$event->hallmap->vip}}</td>
													 <td>{{$event->hallmap->general}}</td>
												   <td><a href="#" class="btn btn-sm btn-primary">Reservation Details</a> </td>


                        </tr>
                   @endforeach

                 </tbody>

             </table>
             <div class="text-center">
           {!! $events->links(); !!}
         </div>
         </div>

      </div>

@endsection
