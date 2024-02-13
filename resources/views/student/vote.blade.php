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
                 @if($title=="NotYetVote") 
                   <h2>Vote</h2>
                 @else
                  <h2>Your Vote Summary</h2>
                 @endif
                   <ul class="nav navbar-right panel_toolbox">
                     
                   </ul>
                   <div class="clearfix"></div>
                 </div>
                 <div class="x_content">


                   
            


            <!--NOT YET VOTE CONDITION-->
            @if($title=="NotYetVote")              
                    <!--If date started is lower than current date-->
                    <!--If election day is not yet started.--> 
                    @if(strtotime($e_timer->date_started) > strtotime(date('m/d/Y H:i:s')) || $e_timer->date_started=="MM/DD/YYYY HH:MM:SS")   
                            <h3><center>VOTING HAS NOT YET STARTED.</center></h3>
                    <!--If election day is started.--> 
                    @else

                            <!--If date ended is lower than current date-->
                            <!--If election day is ended.--> 
                            @if(strtotime($e_timer->date_ended) < strtotime(date('m/d/Y H:i:s')))
                                  <h3><center>VOTING IS NOW OFFICIALLY CLOSED.</center></h3>
                            @else
                            
                                  <!-------------------------------------------------------- FORE VOTING ------------------------------------------------------------>
                                  <form method="post" action="{{ route('student.votes.store') }}" id="formfield" data-parsley-validate class="form-horizontal form-label-left">
                                  <!------>
                                  <div class="form-group{{ $errors->has('president') ? ' has-error' : '' }}">
                                  @if ($errors->has('president'))
                                        <span class="help-block">{{ $errors->first('president') }}</span>
                                  @endif
                                  <div class="VoteRow">
                                                <center><strong>PRESIDENT</strong></center>
                                                <div class="position">
                                                  @foreach($candidates as $data)
                                                    @if($data->position=="President"  && $data->approval=="2")
                                                      <div class="radio">
                                                        <label>
                                                          <input type="radio" class="flat" name="president" value="{{$data->id}}"> {{$data->student->personal_information->lastname}}, {{$data->student->personal_information->firstname}} 
                                                        </label>
                                                      </div>
                                                    @endif
                                                  @endforeach  
                                                </div>
                                  </div>  
                                  </div>
                                  <!------>
                                  <!------>
                                  <div class="form-group{{ $errors->has('vice_president') ? ' has-error' : '' }}">
                                  @if ($errors->has('vice_president'))
                                        <span class="help-block">{{ $errors->first('vice_president') }}</span>
                                  @endif
                                  <div class="VoteRow">
                                                <center><strong>VICE PRESIDENT</strong></center>
                                                <div class="position">
                                                @foreach($candidates as $data)
                                                    @if($data->position=="Vice President" && $data->approval=="2")
                                                      
                                                      <div class="radio">
                                                        <label>
                                                          <input type="radio" class="flat" name="vice_president" value="{{$data->id}}"> {{$data->student->personal_information->lastname}}, {{$data->student->personal_information->firstname}} 
                                                        </label>
                                                      </div>
                                                    @endif
                                                  @endforeach  
                                                </div>
                                  </div>
                                  </div>
                                  <!------>
                                  <!------>
                                  <div class="form-group{{ $errors->has('secretary') ? ' has-error' : '' }}">
                                  @if ($errors->has('secretary'))
                                        <span class="help-block">{{ $errors->first('secretary') }}</span>
                                  @endif
                                  <div class="VoteRow">
                                                <center><strong>SECRETARY</strong></center>
                                                <div class="position">
                                                @foreach($candidates as $data)
                                                    @if($data->position=="Secretary"  && $data->approval=="2")
                                                      <div class="radio">
                                                        <label>
                                                          <input type="radio" class="flat" name="secretary" value="{{$data->id}}"> {{$data->student->personal_information->lastname}}, {{$data->student->personal_information->firstname}} 
                                                        </label>
                                                      </div>
                                                    @endif
                                                  @endforeach  
                                                </div>
                                    </div>
                                  </div>
                                  <!------>
                                  <!------>
                                  <div class="form-group{{ $errors->has('treasurer') ? ' has-error' : '' }}">
                                  @if ($errors->has('treasurer'))
                                        <span class="help-block">{{ $errors->first('treasurer') }}</span>
                                  @endif
                                  <div class="VoteRow">
                                                <center><strong>TREASURER</strong></center>
                                                <div class="position">
                                                @foreach($candidates as $data)
                                                    @if($data->position=="Treasurer"  && $data->approval=="2")
                                                      <div class="radio">
                                                        <label>
                                                          <input type="radio" class="flat" name="treasurer" value="{{$data->id}}"> {{$data->student->personal_information->lastname}}, {{$data->student->personal_information->firstname}} 
                                                        </label>
                                                      </div>
                                                    @endif
                                                  @endforeach  
                                                </div>
                                  </div>
                                  </div>
                                  <!------>
                                  <!------>
                                  <div class="form-group{{ $errors->has('auditor') ? ' has-error' : '' }}">
                                  @if ($errors->has('auditor'))
                                        <span class="help-block">{{ $errors->first('auditor') }}</span>
                                  @endif
                                  <div class="VoteRow">
                                                <center><strong>AUDITOR</strong></center>
                                                <div class="position">
                                                @foreach($candidates as $data)
                                                    @if($data->position=="Auditor"  && $data->approval=="2")
                                                      <div class="radio">
                                                        <label>
                                                          <input type="radio" class="flat" name="auditor" value="{{$data->id}}"> {{$data->student->personal_information->lastname}}, {{$data->student->personal_information->firstname}} 
                                                        </label>
                                                      </div>
                                                    @endif
                                                  @endforeach  
                                                </div>
                                  </div>
                                  </div>
                                  <!------>
                                  <!------>
                                  <div class="form-group{{ $errors->has('business_manager') ? ' has-error' : '' }}">
                                  @if ($errors->has('business_manager'))
                                        <span class="help-block">{{ $errors->first('business_manager') }}</span>
                                  @endif
                                  <div class="VoteRow">
                                                <center><strong>BUSINESS MANAGER</strong></center>
                                                <div class="position">
                                                @foreach($candidates as $data)
                                                    @if($data->position=="Business Manager"  && $data->approval=="2")
                                                      <div class="radio">
                                                        <label>
                                                          <input type="radio" class="flat" name="business_manager" value="{{$data->id}}"> {{$data->student->personal_information->lastname}}, {{$data->student->personal_information->firstname}} 
                                                        </label>
                                                      </div>
                                                    @endif
                                                  @endforeach  
                                                </div>
                                  </div>
                                  </div>
                                  <!------>
                                    <!------>
                                    <div class="form-group{{ $errors->has('pio') ? ' has-error' : '' }}">
                                  @if ($errors->has('pio'))
                                        <span class="help-block">{{ $errors->first('pio') }}</span>
                                  @endif
                                  <div class="VoteRow">
                                                <center><strong>P.I.O</strong></center>
                                                <div class="position">
                                                @foreach($candidates as $data)
                                                    @if($data->position=="P.I.O"  && $data->approval=="2")
                                                      <div class="radio">
                                                        <label>
                                                          <input type="radio" class="flat" name="pio" value="{{$data->id}}"> {{$data->student->personal_information->lastname}}, {{$data->student->personal_information->firstname}} 
                                                        </label>
                                                      </div>
                                                    @endif
                                                  @endforeach  
                                                </div>
                                  </div>
                                  </div>
                                  <!------>
                                 
                          
                                  <center>
                                  <div class="ln_solid"></div>
                                    <div class="form-group">
                                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <input type="hidden" name="_token" value="{{Session::token()}}">
                                        <input type="button" name="btn" value="Submit" id="submitBtn" data-toggle="modal" data-target="#confirm-submit" class="btn-lg btn btn-success" />
                                        <!-- <button type="submit" class="btn-lg btn btn-success" data-toggle="modal" data-target=".bs-example-modal-sm">Submit</button> -->
                                      </div>
                                    </div>
                                  </center>
                                  </form>
                                <!-------------------------------------------------------- FORE VOTING ------------------------------------------------------------>
                             
                             <!--For Date Ended-->
                             @endif  
                   
                    <!--For Date Started-->
                    @endif 



              <!--END OF NOT YET VOTE CONDITION-->
              <!--IF DONE VOTING (VOTING SUMMARY)-->
              <!-----------------------------------------------------------ELSE------------------------------------------------------------------->
              @else
               <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                    
                    <thead>
                    <tr class="headings">
                        <th>Position</th>
                        <th>Lastname</th>
                        <th>Firstname</th>
                        <th>Middlename</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                    
                      @foreach($choosenCandidates as $data)
                      <tr>
                        <td>{{$data->position}}</td>
                        <td>{{$data->lastname}}</td>
                        <td>{{$data->firstname}}</td>
                        <td>{{$data->middlename}}</td>
                       
                       
                      
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  </div>
               @endif
              <!--ENDIF - IF DONE VOTING (VOTING SUMMARY)-->
              <!-----------------------------------------------------------ELSE------------------------------------------------------------------->
           
           
           
           
           
           
           
           
           
           
           
           
                </div>
               </div>
             </div>
           </div>
         </div>

    
       <!-- /page content -->



        <!--MODAL-->
        <div class="modal fade" id="confirm-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Confirmation</h4>
                    </div>
                    <div class="modal-body">
                        <h5>Are you sure you want to submit your vote now?</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <a href="#" id="submit" class="btn btn-success success">Submit</a>
                    </div>
                </div>
            </div>
        </div>
        <!--MODAL-->






@stop
