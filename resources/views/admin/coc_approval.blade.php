@extends('admin.layouts.admin')

@section('content')

         <div class="">    
           <div class="clearfix"></div>

           <div class="row">
             <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="x_panel">
                 <div class="x_title">
                   <h2>COC Application</h2>
                   <ul class="nav navbar-right panel_toolbox">
                     
                   </ul>
                   <div class="clearfix"></div>
                 </div>
                 <div class="x_content">

               
                 <!----- APPLICAION FORM ------>
                 <div class="row"> 
                      <center>
                      <form method="post" action="{{ route('admin.candidates.update', ['id' => $candidate->id]) }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      Republic of the Philippines
                      <h3><strong>Glan School of Arts and Trades</strong></h3>
                      High School Department<br/>
                      Glan, Saranggani Province<br/><br/>
                      <h4>
                      <p>I</p>
                      <p>
                      <strong>{{$candidate->student->personal_information->lastname}}, {{$candidate->student->personal_information->firstname}} {{$candidate->student->personal_information->middlename}}</strong>
                      </p>
                      <p> a High School student in Glan School of Arts and Trades (GSAT), do hereby file my candidacy for the position of</p> 
                      <p>
                      <strong>{{$candidate->position}}</strong>
                      </p>
                      <p>
                      <div class="checkbox">
                            <label>
                              <input type="checkbox" checked disabled class="flat"> I do hereby swear that i will follow the rules and regulations of the School with all my capacity.
                            </label>
                      </div>
                      </p>
                      </h4>
                      <!--BUTTON--->
                      <div class="ln_solid"></div>
                          <div class="form-group{{ $errors->has('aprroval') ? ' has-error' : '' }}">
                            @if ($errors->has('aprroval'))
                              <span class="help-block">{{ $errors->first('aprroval') }}</span>
                            @endif
                            <div class="form-group">
                                <div class="checkbox">
                                  <label>
                                    @if($candidate->approval==2)
                                    <input type="radio" checked name="aprroval" value="2" class="flat"> Approved.
                                    @else
                                    <input type="radio" name="aprroval" value="2" class="flat"> Approved.
                                    @endif
                                  </label>
                                  <label>
                                    @if($candidate->approval==1)
                                    <input type="radio" checked name="aprroval" value="1" class="flat"> Not Approved.
                                    @else
                                    <input type="radio" name="aprroval" value="1" class="flat"> Not Approved.
                                    @endif
                                  </label>
                                </div>
                            </div>
                          </div>
                          <br/>
                          <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                              <input type="hidden" name="_token" value="{{Session::token()}}">
                              <input name="_method" type="hidden" value="PUT">
                              <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                      </div>
                      </form>
                      </center>
                      </div>
                      <!----- /APPLICAION FORM ------>
               
                      
            
                </div>
               </div>
             </div>
           </div>
         </div>

        


@stop
