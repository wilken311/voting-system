@extends('admin.layouts.admin')

@section('content')

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Voter's Registration Code<small></small></h2>
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
                  <br/>
                  <!-----------------------------------CONTENT----------------------------------->

                    <form method="post" action="{{ route('admin.votes.updateVotersCode', ['id' => $students->usercode->id]) }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                          <!--STUDENT NAME--->
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Student <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" disabled value="{{$students->lastname}}, {{$students->firstname}} {{$students->middlename}}" name="firstname" id="firstname" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                          

                          <!--CODE GENERATOR--->
                          <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Code <span class="required">*</span>
                          </label>
                          
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                            <span class="input-group-btn">
                                   <button id="generate" type="button" class="btn btn-primary">Generate</button>
                            </span>
                            <input type="text" name="code" value="{{$students->usercode->code}}" class="form-control"> 
                          
                          </div>
                          @if ($errors->has('code'))
                                  <span class="help-block">{{ $errors->first('code') }}</span>
                            @endif
                          </div>
                          </div>
                       


                          <!--BUTTON--->
                          <div class="ln_solid"></div>
                          <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                   <input type="hidden" name="_token" value="{{Session::token()}}">
                                   <input name="_method" type="hidden" value="PATCH">
                              <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                          </div>

                    </form>

                    <!--ID GENERATOR-->
                    <!-- <script>
                    (function() {
                    function IDGenerator() {
                    
                      this.length = 8;
                      this.timestamp = +new Date;
                      
                      var _getRandomInt = function( min, max ) {
                        return Math.floor( Math.random() * ( max - min + 1 ) ) + min;
                      }
                      
                      this.generate = function() {
                        var ts = this.timestamp.toString();
                        var parts = ts.split( "" ).reverse();
                        var id = "";
                        
                        for( var i = 0; i < this.length; ++i ) {
                          var index = _getRandomInt( 0, parts.length - 1 );
                          id += parts[index];	 
                        }
                        
                        return id;
                      }

                      
                    }
                    
                    
                    document.addEventListener( "DOMContentLoaded", function() {
                      var btn = document.querySelector( "#generate" ),
                        output = document.querySelector( "#output" );
                        
                      btn.addEventListener( "click", function() {
                        var generator = new IDGenerator();
                        output.innerHTML = generator.generate();
                        
                      }, false); 
                      
                    });
                    
                    
                  })();

                    </script> -->

                       <!-----------------------------------CONTENT----------------------------------->

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

