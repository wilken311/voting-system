@extends('admin.layouts.admin')

@section('content')

       <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3><p>List of Students (2019-2020 | First Semester)</p></h3>
                    <a href="{{ route('admin.students.create') }}" class="btn btn-round btn-primary btn-xs" >&nbsp;<i class="fa fa-plus"></i> Add New Student &nbsp; </a></h2>
                    
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


                      <!-- <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            
                            <select class="form-control" id="schoolyear" style="width:100%">
                              <option>Select School Year</option>
                              <option>2018-2019</option>
                              <option>2019-2020</option>
                              <option>2020-2021</option>
                              <option>2021-2022</option>
                              <option>2023-2024</option>
                            </select>
                        </div>
                        <div class="col-lg-6 col-md-6  col-sm-6 col-xs-6">
                            
                            <select class="form-control" id="semester" style="width:100%">
                              <option>Select Semester</option>
                              <option>First Semester</option>
                              <option>Second Semester</option>
                            </select>
                        </div>
                      </div>
                          
                    <hr> -->


           
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
                          <th>Action</th>
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

                          @if($data->status=="Regular")
                          <th><span class="label label-primary">{{$data->status}}</span></th>
                          @else
                          <th><span class="label label-danger">{{$data->status}}</span></th>
                          @endif
                         
                          <td>
                          <a href="{{ route('admin.students.show',['id' => $data->id]) }}" class="btn btn-success btn-xs"><i class="fa fa-eye" title="View"></i> </a>
                          <a href="{{ route('admin.students.edit',['id' => $data->id]) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> </a>
                          <a href="{{ route('admin.student.delete',['id' => $data->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> </a>
                          
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
					
					
                  </div>
                </div>
              </div>
          </div>


          


       

@stop
