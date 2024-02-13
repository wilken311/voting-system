@extends('admin.layouts.admin')

@section('content')

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Student ( 2019-2020 | First Semester )<small></small></h2>
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

                      <div class="">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2><i class="fa fa-user"></i> New/Transferee <small></small></h2>
                              <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                      <li><a href="#">Settings 1</a>
                                      </li>
                                      <li><a href="#">Settings 2</a>
                                      </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a></li>               
                              </ul>
                              <div class="clearfix"></div>
                              <div class="x_content">
                                <br>
                                
                                  <form method="post" action="{{ route('admin.students.store') }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                    <!-----------------------------FOR PERSONAL_INFORMATIONS TABLE---------------------------------->

                                    <!-- LRN-->
                                    <div class="form-group{{ $errors->has('lrn_or_id_no') ? ' has-error' : '' }}">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lrn_or_id_no">LRN <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" value="{{ Request::old('lrn_or_id_no') ?: '' }}" name="lrn_or_id_no" id="lrn_or_id_no" class="form-control col-md-7 col-xs-12">
                                        @if ($errors->has('lrn_or_id_no'))
                                        <span class="help-block">{{ $errors->first('lrn_or_id_no') }}</span>
                                        @endif
                                      </div>
                                    </div>

                                    <!-- Lastname -->
                                    <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lastname">Lastname <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" value="{{ Request::old('lastname') ?: '' }}" name="lastname" id="lastname" class="form-control col-md-7 col-xs-12">
                                        @if ($errors->has('lastname'))
                                        <span class="help-block">{{ $errors->first('lastname') }}</span>
                                        @endif
                                      </div>
                                    </div>

                                   <!-- Firstname -->
                                   <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="firstname">Firstname <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" value="{{ Request::old('firstname') ?: '' }}" name="firstname" id="firstname" class="form-control col-md-7 col-xs-12">
                                        @if ($errors->has('firstname'))
                                        <span class="help-block">{{ $errors->first('firstname') }}</span>
                                        @endif
                                      </div>
                                    </div>

                                  <!-- Middlename -->
                                   <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="middlename">Middlename
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" value="{{ Request::old('middlename') ?: '' }}" name="middlename" id="middlename" class="form-control col-md-7 col-xs-12">  
                                      </div>
                                    </div>

                                 <!--Suffix-->
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="suffix">Suffix
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input type="text" value="{{ Request::old('suffix') ?: '' }}" name="suffix" id="suffix" class="form-control col-md-7 col-xs-12">
                                    </div>
                                  </div>
                                  
                                  <!-- Date of Birth -->
                                  <div class="form-group{{ $errors->has('date_of_birth') ? ' has-error' : '' }}">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="firstname">Date of Birth <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" value="{{ Request::old('date_of_birth') ?: '' }}" placeholder="YYYY-MM-DD" name="date_of_birth" id="date_of_birth" class="form-control col-md-7 col-xs-12">
                                        @if ($errors->has('date_of_birth'))
                                        <span class="help-block">{{ $errors->first('date_of_birth') }}</span>
                                        @endif
                                      </div>
                                    </div>

                                    <!-- Gender -->
                                    <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender<span class="required">*</span></label> 
                                      <div class="col-md-6 col-sm-6 col-xs-12" style="margin-top:10px;">
                                         <p>
                                            M:<input type="radio" class="flat" name="gender" id="genderM" value="Male" checked="checked" required /> 
                                            F:<input type="radio" class="flat" name="gender" id="genderF" value="Female" />
                                        </p>
                                      </div>
                                    </div>

                                   <!-- Address -->
  
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">Address
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input type="text" value="{{ Request::old('address') ?: '' }}" name="address" id="address" class="form-control col-md-7 col-xs-12">
                                    </div>
                                  </div>

                                   <!-- Contact No -->
                                   <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contact_no">Contact No.
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input type="text" value="{{ Request::old('contact_no') ?: '' }}" name="contact_no" id="contact_no" class="form-control col-md-7 col-xs-12">
                                    </div>
                                  </div>

                                   <!-- Photo -->
                                   <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="photo">Photo
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input type="text" value="" name="photo" id="photo" disabled class="form-control col-md-7 col-xs-12">
                                    </div>
                                   </div>


                                   <!-- Person's Type -->
                                   <input type="hidden" name="type" value="student">

                                   
                                  <!---------------FOR STUDENTS TABLE(PER SCHOOL YEAR & SEMESTER)----------------------->

                                  <!-- School Year -->
                                  <input type="hidden" name="school_year" value="2019-2020">

                                  <!-- Semester -->
                                  <input type="hidden" name="semester" value="First Semester">

                                  <!-- Track&Strand -->
                                  <div class="form-group{{ $errors->has('track_and_strand') ? ' has-error' : '' }}">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Track|Strand <span class="required">*</span></label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="track_and_strand" id="track_and_strand" class="form-control">
                                      <option>Choose option</option>
                                      <optgroup label="Academic">
                                        <option value="1">GA</option>
                                        <option value="3">HUMSS</option>
                                        <option value="2">STEM</option>
                                        <option value="4">ABM</option>
                                      </optgroup>
                                      <optgroup label="TVL">
                                        <option value="5">HE</option>
                                        <option value="6">ICT</option>
                                      </optgroup>
                                      <optgroup label="Sports">
                                      </optgroup>
                                      <optgroup label="Arts & Design">
                                      </optgroup>
                                    </select>
                                    @if ($errors->has('track_and_strand'))
                                    <span class="help-block">{{ $errors->first('track_and_strand') }}</span>
                                    @endif
                                  </div>
                                  </div>

                            

                                  <!-- Grade Level -->
                                  <div class="form-group{{ $errors->has('grade_level') ? ' has-error' : '' }}">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Grade Level <span class="required">*</span></label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="grade_level" id="grade_level" class="form-control">
                                      <option>Choose option</option>
                                      <option value="G11">G11</option>
                                      <option value="G12">G12</option>
                                    </select>
                                    @if ($errors->has('grade_level'))
                                    <span class="help-block">{{ $errors->first('grade_level') }}</span>
                                    @endif
                                  </div>
                                  </div>

                                  <!-- Section-->
                                  <div class="form-group{{ $errors->has('section') ? ' has-error' : '' }}">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Section <span class="required">*</span></label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="section" id="section"class="form-control">
                                      <option>Choose option</option>
                                      <option value="Ruby">Ruby</option>
                                      <option value="Emerald">Emerald</option>
                                      <option value="Diamond">Diamond</option>
                                      <option value="Saphire">Saphire</option>
                                      <option value="Tatualla">Tatualla</option>
                                    </select>
                                    @if ($errors->has('section'))
                                    <span class="help-block">{{ $errors->first('section') }}</span>
                                    @endif
                                  </div>
                                  </div>


                                  <!-- Status -->
                                  <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Status <span class="required">*</span></label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="status" id="status" class="form-control">
                                      <option>Choose option</option>
                                      <option value="Regular">Regular</option>
                                      <option value="Irregular">Irregular</option>
                                    </select>
                                    @if ($errors->has('status'))
                                    <span class="help-block">{{ $errors->first('status') }}</span>
                                    @endif
                                  </div>
                                  </div>



                                   
                                  <div class="ln_solid"></div>
                                    <div class="form-group">
                                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                       <input type="hidden" name="_token" value="{{Session::token()}}">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                      </div>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>



                      <!-- Form for Old / Returnee -->

                      <div class="">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2><i class="fa fa-user"></i> Old/Returnee <small></small></h2>
                              <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                      <li><a href="#">Settings 1</a>
                                      </li>
                                      <li><a href="#">Settings 2</a>
                                      </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a></li>               
                              </ul>
                              <div class="clearfix"></div>
                              <div class="x_content">
                                <br>

                                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                    <div class="form-group">
                                    <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <select class="form-control" id="studentlist" style="width:100%">
                                          <option>Search Name</option>
                                          <option>Wilken Montero</option>
                                          <option>Pol Adrian Binas</option>
                                          <option>Jonathan Pregoner</option>
                                          <option>Isidro Rambuanay</option>
                                          <option>Juan Dela Cruz</option>
                                        </select>
                                    </div>  
                                   </div>
                                   
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                      </div>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

            

                    </div>
                  </div>
                </div>
              </div>
            </div>

 

@stop

