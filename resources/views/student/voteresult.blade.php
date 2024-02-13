@extends('student.layouts.student')

@section('content')

         <div class="">
           
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
           <div class="clearfix"></div>

           <div class="row">
             <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="x_panel">
                 <div class="x_title">
                   <h2>Overall Votes Result</h2>
                   <ul class="nav navbar-right panel_toolbox">
                     
                   </ul>
                   <div class="clearfix"></div>
                 </div>
                 <div class="x_content">

               
                
                <div class="table-responsive">
                <table  id="datatable-buttons" class="table table-striped jambo_table bulk_action">
                    
                    <thead>
                    <tr class="headings">
                        <th>Position</th>
                        <th>Lastname</th>
                        <th>Firstnanme</th>
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
         </div>

        


@stop
