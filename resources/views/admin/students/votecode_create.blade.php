@extends('admin.layouts.admin')

@section('content')

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Create Voter's Registration Code<small></small></h2>
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

                    <form method="post" action="{{ route('admin.votes.store') }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                          <!--STUDENT NAME--->
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Student <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="person_id" name="person_id" class="form-control" required>
                              @foreach($students as $data)
                                @if($data->code=="")
                                <option value="{{$data->id}}">{{$data->lastname}}, {{$data->firstname}} {{$data->middlename}}</option>
                                @endif
                              @endforeach  
                            </select>
                          </div>
                        </div>
                          

                          <!--CODE GENERATOR--->
                          <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Code <span class="required">*</span>
                          </label>
                          
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                            <span class="input-group-btn">
                                   <button onclick="IDGenerator()" id="generate" type="button"  class="btn btn-primary">Generate</button>
                            </span>
                            <input type="text" id="code" name="code" class="form-control"> 
                            <!-- <p id="code"></p> -->
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
                              <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                          </div>

                    </form>

                    <script>
                  
                    function IDGenerator() {
                     
                      this.length = 8;
                      this.timestamp = +new Date;
                      
                      var _getRandomInt = function( min, max ) {
                        return Math.floor( Math.random() * ( max - min + 1 ) ) + min;
                      }
                      
                      var ts = this.timestamp.toString();
                      var parts = ts.split( "" ).reverse();
                      var id = "";
                      
                      for( var i = 0; i < this.length; ++i ) {
                        var index = _getRandomInt( 0, parts.length - 1 );
                        id += parts[index];	 
                      }
                      
                      document.getElementById("code").value = id;
                    

                      
                    }
                    
                    
                    // document.addEventListener( "DOMContentLoaded", function() {
                    //   var btn = document.querySelector( "#generate" ),
                    //     output = document.querySelector( "#code" );
                        
                    //   btn.addEventListener( "click", function() {
                    //     var generator = new IDGenerator();
                    //     output.innerHTML = generator.generate();
                        
                    //   }, false); 
                      
                    // });
                    
                    
             

                    </script>

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

