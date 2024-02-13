@extends('admin.layouts.admin')

@section('content')
        <!---TIMER------------->
        <center>
                  <!--IF TIME NOT SET-->
                 @if($coc_timer->date_started=="MM/DD/YYYY HH:MM:SS")
                 <div class="row">

                      <div class="row top_tiles">
                          <div class="animated flipInY col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="tile-stats">
                                  <div class="icon"><i class=""></i></div>
                                      <div class="count" id="">TIME NOT SET</div>
                                          <h3>TIME</h3>
                                          <p>

                                      </p>
                                  </div>
                              </div>
                      </div>
                  </div>
                  <!--IF TIME IS SET-->
                  @else
                          <!--If date started is greater than current date-->
                          @if(strtotime($coc_timer->date_started) > strtotime(date('m/d/Y H:i:s')))
                          <div class="row">
                              <div class="row top_tiles">
                                  <div class="animated flipInY col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                      <div class="tile-stats">
                                          <div class="icon"><i class=""></i></div>
                                              <div class="count" id="start_coc_demo"></div>
                                              <!-- {{date('m/d/Y')}} {{date('H:i:s')}} -->
                                                  <h4>TIME LEFT TO START FILING OF COC</h4>
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
                                                <div class="count" id="end_coc_demo"></div>
                                              
                                                    <h4>TIME LEFT TO END FILLING OF COC</h4>
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
                  <h2><p>COC Application<p></h2>
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
           <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    
                      <thead>
                        <tr>
                          <th>Position</th>
                          <th>Lastname</th>
                          <th>Firstname</th>
                          <th>Middlename</th>
                          <th>Status</th>
                          <th>Time</th>
                          <th>Action</th>
                          
                          <!-- <th>Action</th> -->
                       
                        </tr>
                      </thead>
                      <tbody>
                      
                        <!-- @foreach($candidates as $data)
                        <tr>
                          <td>{{$data->position}}</td>
                          <td>{{$data->student->personal_information->lastname}}</td>
                          <td>{{$data->student->personal_information->firstname}}</td> 
                          <td>
                            <a href="#" class="btn btn-success btn-xs"><i class="fa fa-eye" title="View"></i> </a>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> </a>
                          </td>
                        </tr>
                        @endforeach -->
                        @foreach($candidates as $data)
                         <tr>
                          <td>{{$data->position}}</td>
                          <td>{{$data->student->personal_information->lastname}}</td>
                          <td>{{$data->student->personal_information->firstname}}</td> 
                          <td>{{$data->student->personal_information->middlename}}</td>
                          
                          <td>
                            @if($data->approval=="")
                            <span class="label label-primary">For Approval</span>
                            @elseif($data->approval==1)
                            <span class="label label-danger">Not Approved</span>   
                            @elseif($data->approval==2)
                            <span class="label label-success">Approved</span>   
                            @endif
                          </td>
                          
                          <td>{{$data->created_at->diffForHumans()}}</td>
                          <td>
                          <a href="{{ route('admin.candidates.show',['id' => $data->id]) }}" class="btn btn-success btn-xs"><i class="fa fa-eye" title="View"></i> </a>
                          
                          <a href="{{ route('admin.candidates.edit',['id' => $data->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> </a>
                          
                           
                          </td>
                        </tr>
                        @endforeach

                      </tbody>
                    </table>
					
					
                  </div>
                </div>
              </div>
          </div>
          </div>


          


       

@stop
