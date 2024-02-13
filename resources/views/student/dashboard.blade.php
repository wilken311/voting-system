@extends('student.layouts.student')

@section('content')

         <div class="row">
            <div class="row top_tiles">
                <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                        
                        <div class="count">
                        @if($coc_timer->date_started=="MM/DD/YYYY HH:MM:SS")
                        <h4><strong>TIME NOT SET</strong></h4>
                        @else
                        <h4><strong>Date Started: {{$coc_timer->date_started}} </strong></h4>
                        <h4><strong>Date Ended:&nbsp; {{$coc_timer->date_ended}}</strong></h4>
                        @endif
                        
                       

                        </div>
                        <h3>COC Schedule</h3>
                        <p>
                        Schedule for Filing of COC.
                        </p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                        
                        <div class="count">
                        @if($e_timer->date_started=="MM/DD/YYYY HH:MM:SS")
                        <h4><strong>TIME NOT SET</strong></h4>
                        @else
                        <h4><strong>Date Started: {{$e_timer->date_started}} </strong></h4>
                        <h4><strong>Date Ended:&nbsp; {{$e_timer->date_ended}}</strong></h4>
                        @endif
                        </div>
                        <h3>Election Schedule</h3>
                        <p>
                        Schedule of Election day.
                        </p>
                    </div>
                </div>
               
               
             </div> 
             
          </div>
        
@stop
