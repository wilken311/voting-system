@extends('admin.layouts.admin')

@section('content')

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Create Candidate<small></small></h2>
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

                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                          <!--STUDENT NAME--->
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Student <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="students_code" class="form-control" required>
                              @foreach($students as $data)
                              <option value="">{{$data->personal_information->lastname}}, {{$data->personal_information->firstname}}</option>
                              @endforeach  
                            </select>
                          </div>
                          </div>
                          
                     <!--STUDENT NAME--->
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Position <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="position" class="form-control" required>
                              <option value="">President</option>
                              <option value="">Vice President</option>
                              <option value="">Secretary</option>
                              <option value="">Treasurer</option>
                              <option value="">Auditor</option>
                              <option value="">Business Manager</option>
                              <option value="">P.I.O</option>
                            
                            </select>
                          </div>
                          </div>
                          
                      

                          <!--BUTTON--->
                          <div class="ln_solid"></div>
                          <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                              <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                          </div>

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

