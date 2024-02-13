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
                                                  <h3>TIME LEFT TO START</h3>
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
                                              
                                                    <h3>TIME LEFT TO END</h3>
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
                    <h2>Election Schedule<small></small></h2>
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
                  <br />
                  <!-----------------------------------CONTENT----------------------------------->

                    <form method="post" action="{{ route('admin.votes.update', ['id' =>2]) }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                          <!--STUDENT NAME--->
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Date Started <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="datepicker"  value="{{$e_timer->date_started}}" name="newdate" placeholder="MM/DD/YY HH:MM:SS" required="required" class="form-control col-md-7 col-xs-12">
                            <!-- <input type="text" name="startdate" value="{{date('m/d/Y')}} {{date('H:i:s')}}" id="first-name" required="required" class="form-control col-md-7 col-xs-12"> -->
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Date Ended <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="datepicker"  value="{{$e_timer->date_ended}}" name="enddate" placeholder="MM/DD/YY HH:MM:SS" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>

                          <!--BUTTON--->
                          <center>
                          <div class="ln_solid"></div>
                          <div class="form-group">
                                    <input type="hidden" name="_token" value="{{Session::token()}}">
                                   <input name="_method" type="hidden" value="PUT">
                                   @if($e_timer->date_started=="MM/DD/YYYY HH:MM:SS")
                                   <button type="submit" class="btn btn-success">Submit</button>
                                   @else
                                   <button type="submit" class="btn btn-success">Update</button>
                                   @endif
                          </div>
                          </center>

                    </form>






                       <!-----------------------------------CONTENT----------------------------------->


                         <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                         </form>
                    </div>
                  </div>
                </div>



                      <!-- Form for Old / Returnee -->

                      
            

                    </div>
                  </div>
                </div>
              </div>
            </div>



@stop

