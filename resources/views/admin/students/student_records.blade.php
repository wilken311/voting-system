@extends('admin.layouts.admin')

@section('content')

   <!-- page content -->

          <div class="">
           
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Student Records</h2>
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
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="{{asset('assets/admin/images/picture.jpg')}}" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3>{{$students->personal_information->lastname}}, {{$students->personal_information->firstname}} {{$students->personal_information->middlename}} {{$students->personal_information->suffix}}</h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> Polomolok South Cotabato
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> Grade 7
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> Section 13
                        </li>

                        <li>
                          <i class="fa fa-phone user-profile-icon"></i> 093023423433
                        </li>

                      </ul>

                      <!-- <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a> -->
                      <br />

                      <!-- start skills -->
                      <h4>Contact Information</h4>
                      <ul class="list-unstyled user_data">
                        <li>
                          <p><strong>Mother's name</strong></p>
                          <p>Julia Barreto</p>
                        </li>
                        <li>
                          <p><strong>Father's name</strong></p>
                          <p>Piolo Pascual  </p>
                        </li>
                        
                       
                       
                      </ul>
                      <!-- end of skills -->

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">User Account</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Subjects & Grades</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Statement of Account</a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                          <!--User Start-->
                          <div class="col-md-12 col-xs-12">
                            <div class="x_panel">
                            <div class="x_title">
                                <h2>User Account Details</h2>
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
                                <form class="form-horizontal form-label-left">
                                
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Registration Code</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" placeholder="Default Input">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" placeholder="Default Input">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="password" class="form-control" value="passwordonetwo">
                                    </div>
                                </div>
                                
                                </form>
                            </div>
                            </div>
                          </div>
                          <!--User End -->
                          </div>



                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                            <!-- First Table -->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                            <div class="x_title">
                                <h2>2018-2019 | First Semester</h2>
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

                                <table class="table table-striped">
                                <thead>
                                    <tr>
                                    <th>#</th>
                                    <th>Subject Type</th>
                                    <th>Subjects</th>
                                    <th>1st Quarter</th>
                                    <th>2nd Quarter</th>
                                    <th>Sem Final Grade</th>
                                    <th>Action Taken</th>
                                    <th>Teacher</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>1</td>
                                    <td>Core</td>
                                    <td>21st Century Literature from the Philippines and the World</td>
                                    <td>85</td>
                                    <td>61</td>
                                    <td>90</td>
                                    <td>Passed</td>
                                    <td>Jonathan Tatualla</td>    
                                    </tr>
                                    <tr>
                                    <td>2</td>
                                    <td>Core</td>
                                    <td>21st Century Literature from the Philippines and the World</td>
                                    <td>85</td>
                                    <td>61</td>
                                    <td>90</td>
                                    <td>Passed</td>
                                    <td>Jonathan Tatualla</td>    
                                    </tr>
                                    <tr>
                                    <td>3</td>
                                    <td>Core</td>
                                    <td>21st Century Literature from the Philippines and the World</td>
                                    <td>85</td>
                                    <td>61</td>
                                    <td>90</td>
                                    <td>Passed</td>
                                    <td>Jonathan Tatualla</td>    
                                    </tr>
                                    <tr>
                                    <td>4</td>
                                    <td>Core</td>
                                    <td>21st Century Literature from the Philippines and the World</td>
                                    <td>85</td>
                                    <td>61</td>
                                    <td>90</td>
                                    <td>Passed</td>
                                    <td>Jonathan Tatualla</td>    
                                    </tr>
                                    
                                </tbody>
                                </table>

                            </div>
                            </div>
                            </div>
                            <!-- End of First Table -->

                            <!-- Second Table -->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                            <div class="x_title">
                                <h2>2018-2019 | Second Semester</h2>
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

                                <table class="table table-striped">
                                <thead>
                                    <tr>
                                    <th>#</th>
                                    <th>Subject Type</th>
                                    <th>Subjects</th>
                                    <th>1st Quarter</th>
                                    <th>2nd Quarter</th>
                                    <th>Sem Final Grade</th>
                                    <th>Action Taken</th>
                                    <th>Teacher</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>1</td>
                                    <td>Core</td>
                                    <td>21st Century Literature from the Philippines and the World</td>
                                    <td>85</td>
                                    <td>61</td>
                                    <td>90</td>
                                    <td>Passed</td>
                                    <td>Jonathan Tatualla</td>    
                                    </tr>
                                    <tr>
                                    <td>2</td>
                                    <td>Core</td>
                                    <td>21st Century Literature from the Philippines and the World</td>
                                    <td>85</td>
                                    <td>61</td>
                                    <td>90</td>
                                    <td>Passed</td>
                                    <td>Jonathan Tatualla</td>    
                                    </tr>
                                    <tr>
                                    <td>3</td>
                                    <td>Core</td>
                                    <td>21st Century Literature from the Philippines and the World</td>
                                    <td>85</td>
                                    <td>61</td>
                                    <td>90</td>
                                    <td>Passed</td>
                                    <td>Jonathan Tatualla</td>    
                                    </tr>
                                    <tr>
                                    <td>4</td>
                                    <td>Core</td>
                                    <td>21st Century Literature from the Philippines and the World</td>
                                    <td>85</td>
                                    <td>61</td>
                                    <td>90</td>
                                    <td>Passed</td>
                                    <td>Jonathan Tatualla</td>    
                                    </tr>
                                    
                                </tbody>
                                </table>

                            </div>
                            </div>
                            </div>
                            <!-- End of Second Table -->


                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                            <p>What is Lorem Ipsum?Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
     
        <!-- /page content -->


@stop
