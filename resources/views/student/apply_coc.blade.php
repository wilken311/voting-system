@extends('student.layouts.student')

@section('content')

         <div class="">
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
                                              
                                                  <h4>TIME LEFT TO END FILING OF COC</h4>
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
                   <h2>Apply COC </h2>
                   <ul class="nav navbar-right panel_toolbox">
                     
                   </ul>
                   <div class="clearfix"></div>
                 </div>
                 <div class="x_content">


               <!-- IF THE COC SCHEDULE IS NOT SET -->
               @if($coc_timer->date_started=="MM/DD/YYYY HH:MM:SS")
                    <div class="row"><center><h3>THE FILING OF COC HAS NOT YET STARTED.<center></h3></div>
               <!-- IF THE COC SCHEDULE IS SET -->
               @else
                     <!--If coc schedule is started-->
                     <!--If date started is lower than current date-->
                     @if(strtotime($coc_timer->date_started) < strtotime(date('m/d/Y H:i:s')))

                               <!-- IF THE CANDIDATE HAS APPLY FOR COC -->
                                @if($ExistingCandidate>=1)
                                        
                                        <div class="row"> 
                                          <center>
                                          @if($candidate->approval=="")
                                            <h3>You successfully applied for your COC.</h3>
                                            <h5>Just wait for the administrator to approve your application.</h5>
                                          @elseif($candidate->approval==1)
                                            <h4>Sorry, your COC application has not been approved by the admin.</h4>
                                            <h5>Please go to the management for more details.</h5>
                                          @elseif($candidate->approval==2)
                                            <h3>Congratulations!</h3>
                                            <h4>Your COC Application has been approved by the admin.</h4>
                                            <h4>You are running as a <strong>{{$candidate->position}}</strong>.</h4>
                                          @endif
                                          
                                          </center>
                                        </div>

                                <!-- IF THE CANDIDATE HAS NOT YET APPLY FOR COC -->
                                @else
                                        <!----- APPLICAION FORM ------>
                                        <div class="row"> 
                                        <center>
                                        <form method="post" action="{{ route('student.candidates.store') }}" id="formfield" data-parsley-validate class="form-horizontal form-label-left">
                                        Republic of the Philippines
                                        <h3><strong>Glan School of Arts and Trades</strong></h3>
                                        High School Department<br/>
                                        Glan, Saranggani Province<br/><br/>
                                        <h4>
                                        <p>I</p>
                                        <p>
                                        <strong>{{ Auth::user()->usercode->personal_information->lastname }}, {{ Auth::user()->usercode->personal_information->firstname }} {{ Auth::user()->usercode->personal_information->middlename }}</strong>
                                        </p>
                                        <p> a High School student in Glan School of Arts and Trades (GSAT), do hereby file my candidacy for the position of</p> 
                                        <p>
                                        <select id="position" name="position" required>
                                                <option value="President">President</option>
                                                <option value="Vice President">Vice President</option>
                                                <option value="Secretary">Secretary</option>
                                                <option value="Treasurer">Treasurer</option>
                                                <option value="Auditor">Auditor</option>
                                                <option value="Business Manager">Business Manager</option>
                                                <option value="P.I.O">P.I.O</option>
                                        </select>
                                        </p>
                                        <p>

                                        <div class="form-group{{ $errors->has('checked') ? ' has-error' : '' }}">
                                              @if ($errors->has('checked'))
                                                <span class="help-block"><h6>{{ $errors->first('checked') }}</h6></span>
                                              @endif
                                        <div class="checkbox">
                                              <label>
                                                <input type="checkbox" name="checked" class="flat"> I do hereby swear that i will follow the rules and regulations of the School with all my capacity.
                                              </label>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        </p>
                                        </h4>

                                        <!-- IF FILING OF COC IN NOT YET ENDED -->
                                        @if(strtotime($coc_timer->date_ended) > strtotime(date('m/d/Y H:i:s')))
                                          <!--BUTTON--->
                                          <div class="ln_solid"></div>
                                              <div class="form-group">

                                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                  <input type="hidden" name="_token" value="{{Session::token()}}">
                                                  <button type="submit" class="btn btn-success">Submit</button>
                                                </div>
                                          </div>
                                          </div>

                                        <!-- IF FILING OF COC IS ENDED -->
                                        @else

                                          <!--BUTTON--->
                                          <div class="ln_solid"></div>
                                              <div class="form-group">

                                                <h5><strong><span style="color:red">Sorry, the filing of COC has now ended.<span></strong></h5>
                                          </div>
                                          </div>

                                        @endif
                                        
                                        </form>
                                        </center>
                                        </div>
                                        <!----- /APPLICAION FORM ------>
                                  @endif


                     <!--If coc schedule is not yet started-->
                     @else
                     <div class="row"><center><h3>THE FILING OF COC HAS NOT YET STARTED.<center></h3></div>


                     @endif

               @endif


               
              



                </div>
               </div>
             </div>
           </div>
         </div>

        


@stop
