@extends('admin.layouts.admin')

@section('content')

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Delete Student<small></small></h2>
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

                       <p>Are you sure you want to delete <strong>{{$students->personal_information->lastname}}, {{$students->personal_information->firstname}} {{$students->personal_information->middlename}} {{$students->personal_information->suffix   }}</strong> ?</p>

                      <form method="post" action="{{ route('admin.students.destroy', ['id' => $students->id]) }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="hidden" name="_token" value="{{Session::token()}}">
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit" class="btn btn-danger" style="align:left">Submit</button>
                            </div>
                        </div>
                     </form>
                          

            

                    </div>
                  </div>
                </div>
              </div>
            </div>

@stop

