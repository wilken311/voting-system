@extends('admin.layouts.admin')

@section('content')

       <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><p>Student Voter's Code<p> <a href="#" class="btn btn-round btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-sm">&nbsp;<i class="fa fa-plus"></i> Add New User &nbsp; </a></h2>
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
                          <th>Registration Code</th>
                          <th>Name</th>
                          <th>Role</th>
                          <th>Email</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>ADFGFDERGIW92F</td>
                          <td>Victhor, Magtanggol C.</td>
                          <td>Student</td> 
                          <td>sonofthor@gmail.com</td>
                          <th><span class="label label-primary">Active</span></th>
                          <td>
                          <a href="#" class="btn btn-success btn-xs"><i class="fa fa-eye" title="View"></i> </a>
                          <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> </a>
                          <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> </a>
                          </td>
                        </tr>
                        
                       
                      </tbody>
                    </table>
					
					
                  </div>
                </div>
              </div>
          </div>


          <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">

                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <h4 class="modal-title" id="myModalLabel2">Add User</h4>
                </div>
                <div class="modal-body">
                  
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="form-group">
                          <div class="input-group">
                              <span class="input-group-btn">
                                  <button type="button" class="btn btn-warning">Generate</button>
                              </span>
                              <input type="text" class="form-control" placeholder="Generate Code">
                          </div>
                      </div>
                      <div class="form-group">
                            <select class="form-control" id="studentlist" style="width:100%">
                              <option>Search Student</option>
                              <option>Wilken Montero</option>
                              <option>Pol Adrian Binas</option>
                              <option>Jonathan Pregoner</option>
                              <option>Isidro Rambuanay</option>
                              <option>Juan Dela Cruz</option>
                            </select>
                      </div>
                      <br>
                      <div class="form-group">
                          <select class="form-control" id="rolelist" style="width:100%">
                            <option>Assign Role</option>
                            <option>Administrator</option>
                            <option>Teacher</option>
                            <option>Student</option>
                          </select>
                       </div>
                     
                    

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cloedfdfse</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>

              </div>
            </div>
          </div>


       

@stop
