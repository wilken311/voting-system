@extends('admin.layouts.admin')

@section('content')

       <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2>Student's Vote Status </h2>
                    
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
                      
                
           
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    
                      <thead>
                        <tr>
                        
                          <th>LRN</th>
                          <th>Name</th>
                          <th>Gender</th>
                          <th>Strand</th>
                          <th>Grade Level</th>
                          <th>Section</th>
                          <th>Status</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                      
                        @foreach($students as $data)
                        <tr>
                          
                          <td>{{$data->personal_information->lrn_or_id_no}}</td>
                          <td>{{$data->personal_information->lastname}}, {{$data->personal_information->firstname}} {{$data->personal_information->middlename}} {{$data->personal_information->suffix}}</td>
                          <td>{{$data->personal_information->gender}}</td>
                          <td>{{$data->strand->abbreviation}}</td>
                          <td>{{$data->grade_level}}</td>
                          <td>{{$data->section}}</td>
                         
                          @if(App\Models\Student::count($data->id)==0)
                          <th><span class="label label-danger">Not Voted</span></th>
                        
                          @else
                          <th><span class="label label-primary">Voted</span></th>
                          @endif
                         
                       
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
					
					
                  </div>
                </div>
              </div>
          </div>


          


       

@stop
