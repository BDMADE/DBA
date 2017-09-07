@extends('Admin/layout')

@section('content')

<div class="container">
    {{Form::open(array('action'=>'AdminMembershipController@handleEdit','id'=>'editPage'))}}
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
                                            <input type="text" name="membership_id" class="form-control" id="membership_id" placeholder="Enter Membership Number"  value="{{$member->membership_id}}" disabled="" >
                                        </div>
                                        <div class="form-group">
                                            
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" value="{{$member->name}}" >
                                        </div>
                                        <div class="form-group">
                                            <label>Father's Name</label>
                                            <input type="text"  name="father" class="form-control" id="father" placeholder="Enter Father's Name ( if none please leave blank )"value="{{$member->father}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Husband's Name</label>
                                            <input type="text"  name="husband" class="form-control" id="husband" placeholder="Enter Husband's Name ( if none please leave blank )"value="{{$member->husband}}">
                                        </div>
                                       <div class="form-group">
                                        <label>Date of Birth</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" name="birthday" id="birthday" value="{{$member->birthday}}" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    
                                     <div class="form-group">
                                            <label>Phone/Mobile</label>
                                            <input type="text" name="phone" value="{{$member->phone}}" class="form-control" id="phone" placeholder="Enter Phone/mobile number" >
                                        </div>
                                    
                                    <div class="form-group">
                                        <label>Date of Enrollment in Bangladesh Bar Council</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" name="date_of_enrollment" id="date_of_enrollment" value="{{$member->date_of_enrollment}}" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    
                                    
                                    <div class="form-group">
                                            <label>Roll</label>
                                            <input type="text" name="roll" class="form-control" id="roll" value="{{$member->roll}}" placeholder="Enter Roll Number" >
                                        </div>
                                    
                                    
                                    <div class="form-group">
                                            <label>Name of selected person on welfare fund </label>
                                            <input type="text" name="acknowledgement_name" class="form-control" id="acknowledgement_name" value="{{$member->acknowledgement_name}}" placeholder="Enter Name of selected person on welfare fund" >
                                        </div>
                                    
                                      <div class="form-group">
                                            <label>Relation between selected person on welfare fund </label>
                                            <input type="text" name="acknowledgement_relationship" class="form-control" id="acknowledgement_relationship" value="{{$member->acknowledgement_relationship}}" placeholder="Enter Relation between selected person on welfare fund" >
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
                                            <input type="text" name="village" class="form-control" id="village" value="{{$member->village}}" placeholder="Enter Village Name" >
                                        </div>
                                        <div class="form-group">
                                            <label>Post Office</label>
                                            <input type="text" name="postOffice" class="form-control" id="postOffice" value="{{$member->postOffice}}" placeholder="Enter Post office Name ">
                                        </div>
                                        <div class="form-group">
                                            <label>Thana</label>
                                            <input type="text" name="thana" class="form-control" id="thana" value="{{$member->thana}}" placeholder="Enter Thana Name">
                                        </div>
                                        
                                         <div class="form-group">
                                            <label>District</label>
                                            <input type="text" name="district" class="form-control" id="district" value="{{$member->district}}" placeholder="Enter District Name">
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
                                            <input type="text" name="present_address" class="form-control" id="present_address" value="{{$member->present_address}}" placeholder="Enter Present Address" >
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
                                            <input type="text" name="date_of_past_enrollment" id="date_of_past_enrollment" value="{{$member->date_of_past_enrollment}}" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group --> 
                                      
                                    <div class="form-group">
                                        <label>Date of Cancel</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" name="date_of_cancel" id="date_of_cancel" value="{{$member->date_of_cancel}}" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group --> 
                                        
                                         <div class="form-group">
                                            <label>Cancel membership number</label>
                                            <input type="text" name="cancel_roll" class="form-control" id="cancel_roll" value="{{$member->cancel_roll}}" placeholder="Enter membership number">
                                        </div>
                                                  
                                    </div><!-- /.box-body -->
                                
                                   
                              
                            </div><!-- /.box -->
                            
                            </div>

</div>
  
     
     <input type="submit" name='save' class="btn btn-success" value="Submit" id="save"/>
     
                   <a href="{{action('AdminMembershipController@formCancel')}}" class="btn btn-default">Please Cancel</a>
                   
                   <input type="hidden" name="member" value="{{$member->id}}"/>
                       
                   
                                        {{Form::close()}}
    
</div>

<script type="text/javascript">
            $(function() {
                //Datemask dd/mm/yyyy
                $("#dob").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
                $("#date_of_enrollment").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
                $("#date_of_past_enrollment").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
                $("#date_of_cancel").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
                
                
            });
        </script>

@stop