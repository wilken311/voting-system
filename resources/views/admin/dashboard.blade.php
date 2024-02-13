@extends('admin.layouts.admin')

@section('content')

         <div class="row">
            <div class="row top_tiles">
                <div class="animated flipInY col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-users"></i></div>
                        <div class="count">{{$totalstudents}}</div>
                        <h3>Total Students</h3>
                        <p>
                        Total students enrolled in the system.
                        </p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-users"></i></div>
                        <div class="count">{{$totalvotes}}</div>
                        <h3>Total Votes</h3>
                        <p>
                        Total students who vote.
                        </p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-users"></i></div>
                        <div class="count">{{$totalstudents-$totalvotes}}</div>
                        <h3>Total Not-Votes</h3>
                        <p>
                        Total students who did not vote.
                        </p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-4 col-md-4 col-sm-4 col-xs-12">
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
                <div class="animated flipInY col-lg-4 col-md-4 col-sm-4 col-xs-12">
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
