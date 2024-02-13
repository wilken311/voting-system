@extends('admin.layouts.admin')

@section('content')
 <!---TIMER------------->
 <center>
                  <!--IF TIME NOT SET-->
                 @if($e_timer->date_started=="MM/DD/YYYY HH:MM:SS")
                 <div class="row">

                      <div class="row top_tiles">
                          <div class="animated flipInY col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="tile-stats">
                                  <div class="icon"><i class=""></i></div>
                                      <div class="count" id="">TIME NOT SET</div>
                                          <h4>TIME</h4>
                                          <p>

                                      </p>
                                  </div>
                              </div>
                      </div>
                  </div>
                  <!--IF TIME IS SET-->
                  @else
                          <!--If date started is greater than current date-->
                          @if(strtotime($e_timer->date_started) > strtotime(date('m/d/Y H:i:s')))
                          <div class="row">
                              <div class="row top_tiles">
                                  <div class="animated flipInY col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                      <div class="tile-stats">
                                          <div class="icon"><i class=""></i></div>
                                              <div class="count" id="start_e_demo"></div>
                                              <!-- {{date('m/d/Y')}} {{date('H:i:s')}} -->
                                                  <h4>TIME LEFT TO START VOTING</h4>
                                                  <p>

                                              </p>
                                          </div>
                                      </div>
                              </div>
                          </div>
                          <!--else-->
                          @else
                          <div class="row">
                                <div class="row top_tiles">
                                    <div class="animated flipInY col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="tile-stats">
                                            <div class="icon"><i class=""></i></div>
                                                <div class="count" id="end_e_demo"></div>
                                              
                                                    <h4>TIME LEFT TO END VOTING</h4>
                                                    <p>

                                                </p>
                                            </div>
                                        </div>
                                </div>
                            </div>
                          @endif
                  @endif
            </center>
            <!---------------------->

       <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2>Overall Votes Result </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                     

           
           <div class="table-responsive">
           <table  id="datatable-buttons" class="table table-striped jambo_table bulk_action">
                    
                      <thead>
                        <tr>
                          <th>Position</th>
                          <th>Lastname</th>
                          <th>Firstname</th>
                          <th>Middlename</th>
                          <th>Votes</th>

                       
                        </tr>
                      </thead>
                      <tbody>
                      
                      @foreach($candidates as $data)
                          @if($data->approval=="2")
                        <tr>
                          
                          <td>{{$data->position}}</td>
                          <td>{{$data->student->personal_information->lastname}}</td>
                          <td>{{$data->student->personal_information->firstname}}</td> 
                          <td>{{$data->student->personal_information->middlename}}</td> 
                          <td>{{App\Models\Vote::count($data->id)}}</td> 
                        </tr>
                        @endif
                        @endforeach
                      </tbody>
                    </table>
					
					
                  </div>
                </div>
              </div>
          </div>
          </div>


          


       

@stop
