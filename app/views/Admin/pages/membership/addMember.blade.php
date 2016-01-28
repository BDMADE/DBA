@extends('Admin/layout')

@section('content')

<div class="container">
    {{Form::open(array('action'=>'AdminMembershipController@handleCreate','id'=>'createPage'))}}
<div class="row">
                        <!--1st row left column -->
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="box box-solid box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Personal Information</h3>
                                    
                                </div><!-- /.box-header -->
                                <!-- form start -->
                              
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Membership Number</label>
                                            <input type="text" name="membership_id" class="form-control" id="membership_id" placeholder="Enter Membership Number" required="" >
                                        </div>
                                        <div class="form-group">
                                            
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" >
                                        </div>
                                        <div class="form-group">
                                            <label>Father's Name</label>
                                            <input type="text"  name="father" class="form-control" id="father" placeholder="Enter Father's Name ( if none please leave blank )">
                                        </div>
                                        <div class="form-group">
                                            <label>Husband's Name</label>
                                            <input type="text"  name="husband" class="form-control" id="husband" placeholder="Enter Husband's Name ( if none please leave blank )">
                                        </div>
                                       <div class="form-group">
                                        <label>Date of Birth</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" name="birthday" id="birthday" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    
                                     <div class="form-group">
                                            <label>Phone/Mobile</label>
                                            <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter Phone/mobile number" >
                                        </div>
                                    
                                    <div class="form-group">
                                        <label>Date of Enrollment in Bangladesh Bar Council</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="date" name="date_of_enrollment" id="date_of_enrollment" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    
                                    
                                    <div class="form-group">
                                            <label>Roll</label>
                                            <input type="text" name="roll" class="form-control" id="roll" placeholder="Enter Roll Number" >
                                        </div>
                                    
                                    
                                    <div class="form-group">
                                            <label>Name of selected person on welfare fund </label>
                                            <input type="text" name="acknowledgement_name" class="form-control" id="acknowledgement_name" placeholder="Enter Name of selected person on welfare fund" >
                                        </div>
                                    
                                      <div class="form-group">
                                            <label>Relation between selected person on welfare fund </label>
                                            <input type="text" name="acknowledgement_relationship" class="form-control" id="acknowledgement_relationship" placeholder="Enter Relation between selected person on welfare fund" >
                                        </div>
                                    
                                    </div><!-- /.box-body -->

                                   
                              
                            </div><!-- /.box -->
                            
                            
                            </div>

<!--1st row right column -->
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="box box-solid box-success">
                                <div class="box-header">
                                    <h3 class="box-title">Permanent Address</h3>
                                   
                                </div><!-- /.box-header -->
                                <!-- form start -->
                              
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Village</label>
                                            <input type="text" name="village" class="form-control" id="village"  placeholder="Enter Village Name" >
                                        </div>
                                        <div class="form-group">
                                            <label>Post Office</label>
                                            <input type="text" name="postOffice" class="form-control" id="postOffice" placeholder="Enter Post office Name ">
                                        </div>
                                        <div class="form-group">
                                            <label>Thana</label>
                                            <input type="text" name="thana" class="form-control" id="thana" placeholder="Enter Thana Name">
                                        </div>
                                        
                                         <div class="form-group">
                                            <label>District</label>
                                            <input type="text" name="district" class="form-control" id="district" placeholder="Enter District Name">
                                        </div>
                                                                             
                                    </div><!-- /.box-body -->

                                   
                              
                            </div><!-- /.box -->
                            
                            <div class="box box-solid box-warning">
                                <div class="box-header">
                                    <h3 class="box-title">Present Address</h3>
                                    
                                </div><!-- /.box-header -->
                                <!-- form start -->
                              
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" name="present_address" class="form-control" id="present_address"  placeholder="Enter Present Address" >
                                        </div>
                                                  
                                    </div><!-- /.box-body -->
                                
                                   
                              
                            </div><!-- /.box -->
                            
                             <div class="box box-solid box-danger">
                                <div class="box-header">
                                    <h3 class="box-title">Old membership</h3>
                                    
                                </div><!-- /.box-header -->
                                <!-- form start -->
                              
                                    <div class="box-body">
                                       
                                        <div class="form-group">
                                        <label>Date of Past Enrollment (If exists)</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="date" name="date_of_past_enrollment" id="date_of_past_enrollment" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group --> 
                                      
                                    <div class="form-group">
                                        <label>Date of Cancel</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="date" name="date_of_cancel" id="date_of_cancel" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group --> 
                                        
                                         <div class="form-group">
                                            <label>Cancel membership number</label>
                                            <input type="text" name="cancel_roll" class="form-control" id="cancel_roll"  placeholder="Enter membership number">
                                        </div>
                                                  
                                    </div><!-- /.box-body -->
                                
                                   
                              
                            </div><!-- /.box -->
                            
                            </div>

</div>
    
    <div class="row">
        <div class="col-md-12">
                            <div class="box box-solid box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Education</h3>
                                   
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover table-bordered">
                                        <tr>
                                            <th>#Id</th>
                                            <th>Course</th>
                                            <th>Class/Division</th>
                                            <th>Year</th>
                                            <th>Board/University</th>
                                            
                                        </tr>
                                        
                                        <tr>
                                            <th>1</th>
                                            <th>
                                      
                                            <div class="form-group">
                                           
                                                <select class="form-control" name="ssc">
                                                <option>S.S.C</option>
                                                <option>O-Level</option>
                                                <option>Dakhil</option>
                                                <option>Equivalent</option>
                                                 </select>
                                        </div>
                                           
                                    </th>
                                            <th><div class="form-group"><input type="text" name="ssc_class" class="form-control" placeholder="Enter Class/Division" ></div></th>
                                            <th><div class="form-group"><input type="text" name="ssc_year" class="form-control" placeholder="Enter Year"></div></th>
                                            <th><div class="form-group"><input type="text" name="ssc_board" class="form-control" placeholder="Board/Universtiy "></div></th>
                                            
                                        </tr>
                                        
                                        
                                         <tr>
                                            <th>2</th>
                                            <th>
                                      
                                            <div class="form-group">
                                           
                                                <select class="form-control" name="hsc">
                                                <option>H.S.C</option>
                                                <option>A-Level</option>
                                                <option>Alim</option>
                                                <option>Equivalent</option>
                                                 </select>
                                        </div>
                                           
                                    </th>
                                            <th><div class="form-group"><input type="text" name="hsc_class" class="form-control" placeholder="Enter Class/Division" ></div></th>
                                            <th><div class="form-group"><input type="text" name="hsc_year" class="form-control" placeholder="Enter Year"></div></th>
                                            <th><div class="form-group"><input type="text" name="hsc_board" class="form-control" placeholder="Board/Universtiy "></div></th>
                                            
                                        </tr>
                                        
                                         <tr>
                                            <th>3</th>
                                            <th>
                                      
                                            <div class="form-group">
                                           
                                                <select class="form-control" name="hons">
                                                <option>L.L.B (Hons.)</option>
                                                <option>L.L.B (Pass)</option>
                                                 <option>N/A</option>
                                                
                                                 </select>
                                        </div>
                                           
                                    </th>
                                            <th><div class="form-group"><input type="text" name="hons_class" class="form-control" placeholder="Enter Class/Division" ></div></th>
                                            <th><div class="form-group"><input type="text" name="hons_year" class="form-control" placeholder="Enter Year"></div></th>
                                            <th><div class="form-group"><input type="text" name="hons_varsity" class="form-control" placeholder="Board/Universtiy "></div></th>
                                            
                                        </tr>
                                        
                                         <tr>
                                            <th>4</th>
                                            <th>
                                      
                                            <div class="form-group">
                                           
                                                <select class="form-control" name="masters">
                                                <option>L.L.M</option>
                                                <option>N/A</option>
                                                </select>
                                        </div>
                                           
                                    </th>
                                            <th><div class="form-group"><input type="text" name="masters_class" class="form-control" placeholder="Enter Class/Division " ></div></th>
                                            <th><div class="form-group"><input type="text" name="masters_year" class="form-control" placeholder="Enter Year"></div></th>
                                            <th><div class="form-group"><input type="text" name="masters_varsity" class="form-control" placeholder="Board/Universtiy "></div></th>
                                            
                                        </tr>
                                        
                                         <tr>
                                            <th>5</th>
                                            <th>
                                      
                                            <div class="form-group">
                                           
                                                <select class="form-control" name="barAtLaw">
                                                <option>Bar at Law</option>
                                                <option>Ph.D.</option>
                                                <option>N/A</option>
                                                
                                                 </select>
                                        </div>
                                           
                                    </th>
                                            <th><div class="form-group"><input type="text" name="bl_class" class="form-control" placeholder="Enter Class/Division " ></div></th>
                                            <th><div class="form-group"><input type="text" name="bl_year" class="form-control" placeholder="Enter Year"></div></th>
                                            <th><div class="form-group"><input type="text" name="bl_varsity" class="form-control" placeholder="Board/Universtiy "></div></th>
                                            
                                        </tr>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
    </div>

</div>
  
     <input type="submit" name='save' class="btn btn-success" value="Submit" id="save"/>
     <input type="reset" name='clear' class="btn btn-primary" value="Reset" id="continue"/>
                   <a href="{{action('AdminMembershipController@formCancel')}}" class="btn btn-default">Please Cancel</a>
                   
                                        {{Form::close()}}
    
</div>

<script type="text/javascript">
            $(function() {
                //Datemask dd/mm/yyyy
                $("#birthday").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
                $("#date_of_enrollment").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
                $("#date_of_past_enrollment").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
                $("#date_of_cancel").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
                
                
            });
        </script>

@stop