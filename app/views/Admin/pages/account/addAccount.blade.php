@extends('Admin/layout')

@section('content')

<div class="container">
    {{Form::open(array('action'=>'AdminAccountController@handleCreate','id'=>'createPage'))}}
    
    <div class="row">
        <div class="col-md-12"> 
      <div class="box box-solid box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Information</h3>
                                    
                                </div><!-- /.box-header -->
                                <!-- form start -->
                              
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Membership Number</label>
                                            <input type="text" name="membership_id" class="form-control" id="membership_id"  placeholder="Enter Membership Number" required="">
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-md-6">
                                          <div class="form-group">
                                        <label>From</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" name="from" class="form-control pull-right" id="from"/>
                                        </div><!-- /.input group -->
                                    </div>
                                            </div>
                                         <div class="col-md-6">    
                                        <div class="form-group">
                                        <label>To</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" name="to" class="form-control pull-right" id="to"/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group --> 
                                    
                                         </div>
                                        </div>
                                    </div><!-- /.box-body -->
                                
                                   
                              
                            </div><!-- /.box -->
                            
        </div>
    </div>
    
<div class="row">
                        <!--1st row left column -->
                        <div class="col-md-4">
                            <!-- general form elements -->
                            <div class="box box-solid box-success">
                                <div class="box-header">
                                    <h3 class="box-title">Regular Fee</h3>
                                    
                                </div><!-- /.box-header -->
                                <!-- form start -->
                              
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Monthly Fee</label>
                                            <input type="text" name="monthly_fee" class="form-control" id="monthly_fee" placeholder="Enter Monthly Fee" >
                                        </div>
                                        <div class="form-group">
                                            
                                            <label>Benevolent Fund</label>
                                            <input type="text" name="benevolent_fund" class="form-control" id="benevolent_fund" placeholder="Enter Benevolent" >
                                        </div>
                                        <div class="form-group">
                                            <label>Building Fund</label>
                                            <input type="text"  name="building_fund" class="form-control" id="building_fund" placeholder="Enter Building Fund">
                                        </div>
                                        <div class="form-group">
                                            <label>Relief Fund</label>
                                            <input type="text"  name="relief_fund" class="form-control" id="relief_fund" placeholder="Enter Relief Fund">
                                        </div>
                                       
                                    
                                     <div class="form-group">
                                            <label>Medical Fund</label>
                                            <input type="text" name="medical_fund" class="form-control" id="medical_fund" placeholder="Enter Medical Fund" >
                                        </div>
                                    
                                        <div class="form-group">
                                            <label>Library Fund</label>
                                            <input type="text" name="library_fund" class="form-control" id="library_fund" placeholder="Enter Library Fund" >
                                        </div>
                                   
                                    
                                    
                                    <div class="form-group">
                                            <label>Provident Fund </label>
                                            <input type="text" name="provident_fund" class="form-control" id="provident_fund" placeholder="Enter Provident Fund" >
                                        </div>
                                    
                                     <div class="form-group">
                                            <label>Others </label>
                                            <input type="text" name="others" class="form-control" id="provident_fund" placeholder="Enter Other Fee" >
                                        </div>
                                        
                                   
                                    </div><!-- /.box-body -->

                                   
                              
                            </div><!-- /.box -->
                            
                            
                            </div>

<!--1st row right column -->
                        <div class="col-md-4">
                            <!-- general form elements -->
                            <div class="box box-solid box-success">
                                <div class="box-header">
                                    <h3 class="box-title">Admission</h3>
                                   
                                </div><!-- /.box-header -->
                                <!-- form start -->
                              
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Admission Fee</label>
                                            <input type="text" name="admission_fee" class="form-control" id="admission_fee"  placeholder="Enter Admission Fee" >
                                        </div>
                                        <div class="form-group">
                                            <label>ID Card/Application Form Fee</label>
                                            <input type="text" name="application_form_fee" class="form-control" id="application_form_fee" placeholder="Enter ID Card/Application Form Fee ">
                                        </div>
                                        <div class="form-group">
                                            <label>Member list/Constitution Fee</label>
                                            <input type="text" name="memberlist_fee" class="form-control" id="memberlist_fee" placeholder="Enter Member list/Constitution Fee">
                                        </div>
                                                                             
                                    </div><!-- /.box-body -->

                                   
                              
                            </div><!-- /.box -->
                            
                            <div class="box box-solid box-danger">
                                <div class="box-header">
                                    <h3 class="box-title">Dues</h3>
                                    
                                </div><!-- /.box-header -->
                                <!-- form start -->
                              
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Late Fee</label>
                                            <input type="text" name="late_fee" class="form-control" id="late_fee"  placeholder="Enter Late Fee" >
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Dues of Benevolent Fund</label>
                                            <input type="text" name="benevolent_fund_dues" class="form-control" id="benevolent_fund_dues"  placeholder="Enter Benevolent Fund Dues" >
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Dues of Monthly Fee</label>
                                            <input type="text" name="monthly_fee_dues" class="form-control" id="monthly_fee_dues"  placeholder="Enter Monthly Fee Dues" >
                                        </div>
                                                  
                                    </div><!-- /.box-body -->
                                
                                   
                              
                            </div><!-- /.box -->
                            
                              
                            </div>


<div class="col-md-4">
    
    
     <!-- general form elements -->
                            <div class="box box-solid box-success">
                                <div class="box-header">
                                    <h3 class="box-title">Others</h3>
                                   
                                </div><!-- /.box-header -->
                                <!-- form start -->
                              
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Auditorium Fee</label>
                                            <input type="text" name="auditorium_fee" class="form-control" id="auditorium_fee"  placeholder="Enter Auditorium Fee" >
                                        </div>
                                        <div class="form-group">
                                            <label>Drawer Fee /Legal Aid</label>
                                            <input type="text" name="drawer_fee" class="form-control" id="drawer_fee" placeholder="EnterDrawer Fee /Legal Aid Fee ">
                                        </div>
                                        
                                         <div class="form-group">
                                            <label>Membership Certificate</label>
                                            <input type="text" name="membership_certificate_fee" class="form-control" id="membership_certificate_fee" placeholder="Enter Membership Certificate Fee ">
                                        </div>
                                        <div class="form-group">
                                            <label>Blood Sugar Test Fee</label>
                                            <input type="text" name="blood_test_fee" class="form-control" id="blood_test_fee" placeholder="Enter Blood Sugar Test Fee">
                                        </div>
                                        
                                         
                                        
                                        
                                         <div class="form-group">
                                            <label>Lawyer Family Welfare Fund</label>
                                            <input type="text" name="family_welfare_fund" class="form-control" id="family_welfare_fund" placeholder="Enter Lawyer Family Welfare Fund ">
                                        </div>
                                        
                                                                        
                                    </div><!-- /.box-body -->

                                   
                              
                            </div><!-- /.box -->
                              <div class="box box-solid box-success">
                                <div class="box-header">
                                    <h3 class="box-title">Total</h3>
                                   
                                </div><!-- /.box-header -->
                                <!-- form start -->
                              
                                    <div class="box-body">
                                       
                                        <input class="btn btn-flat btn-primary" type="submit"  name="continue" value="View" />
                                        <!-- The following div will use to display data from server -->
                                       
                                       
 
                                    </div><!-- /.box-body -->

                                   
                              
                            </div><!-- /.box -->
</div>

</div>
   
    <input type="submit" name="save" value="Submit" id="save" class="btn btn-primary btn-success">
     <input type="reset" name='clear' class="btn btn-primary" value="Reset" id="reset"/>
                   <a href="{{action('AdminAccountController@formCancel')}}" class="btn btn-default">Please Cancel</a>
                   
                                        {{Form::close()}}
    
</div>

<script>
	$(function() {
		var dates = $( "#from, #to" ).datepicker({
			defaultDate: "+1w",
			changeMonth: true,
            changeYear: true, 
            
			numberOfMonths: 1,
			dateFormat: 'dd-mm-yy',
			onSelect: function( selectedDate ) {
				var option = this.id == "from" ? "minDate" : "maxDate",
					instance = $( this ).data( "datepicker" ),
					date = $.datepicker.parseDate(
						instance.settings.dateFormat ||
						$.datepicker._defaults.dateFormat,
						selectedDate, instance.settings );
				dates.not( this ).datepicker( "option", option, date );
			}
		});
	});
	</script>


<!--script type="text/javascript">
            $(function() {
                
                //Date range picker
                $('#reservation').daterangepicker({format: 'DD/MM/YYYY'});
                //Date range picker with time picker
                
                

            });
        </script>
        
         <script>

  /* attach a submit handler to the form */
  $("#createPage").submit(function(event) {
  /* stop form from submitting normally */  
  event.preventDefault();

  /* get some values from elements on the page: */
  var $form = $( this ),
  //Get the first value
  value1 = $form.find( 'input[name="monthly_fee"]' ).val(),
  //get second value
  value2 = $form.find( 'input[name="benevolent_fund"]' ).val(),
  
  //get Third value
  value3 = $form.find( 'input[name="building_fund"]' ).val(),
  
  value4 = $form.find( 'input[name="relief_fund"]' ).val(),
  
  value5 = $form.find( 'input[name="medical_fund"]' ).val(),
  
  value6 = $form.find( 'input[name="provident_fund"]' ).val(),
  
  value7 = $form.find( 'input[name="late_fee"]' ).val(),
  
  value8 = $form.find( 'input[name="benevolent_fund_dues"]' ).val(),
  
  value9 = $form.find( 'input[name="monthly_fee_dues"]' ).val(),
  
  value10 = $form.find( 'input[name="admission_fee"]' ).val(),
  
  value11= $form.find( 'input[name="memberlist_fee"]' ).val(),
  
  value12 = $form.find( 'input[name="application_form_fee"]' ).val(),
  
  value13 = $form.find( 'input[name="auditorium_fee"]' ).val(),
  
  value14 = $form.find( 'input[name="drawer_fee"]' ).val(),
  
  value15 = $form.find( 'input[name="membership_certificate_fee"]' ).val(),
  
  
  value16 = $form.find( 'input[name="blood_test_fee"]' ).val(),
  
  value17 = $form.find( 'input[name="family_welfare_fund"]' ).val(),
  
  value18 = $form.find( 'input[name="others"]' ).val(),
  
  value19 = $form.find( 'input[name="library_fund"]' ).val(),
  
  //get the url. action="count.php"
  url = $form.attr( 'action' );

  /* Send the data using post */
  var posting = $.post( url, {
      
      monthly_fee: value1,
      benevolent_fund: value2 ,
      building_fund: value3,
      relief_fund:value4,
      medical_fund:value5,
      provident_fund:value6,
      late_fee:value7,
      benevolent_fund_dues:value8,
      monthly_fee_dues:value9,
      admission_fee:value10,
      memberlist_fee:value11,
     
      application_form_fee:value12,
      auditorium_fee:value13,
      drawer_fee:value14,
      membership_certificate_fee:value15,
      blood_test_fee:value16,
      family_welfare_fund:value17,
      others:value18,
      library_fund:value19
  } );

  /* Put the results in a div */
  posting.done(function( data ) {

  $( "#result" ).empty().append( data );
  });
  });
  
    
  </script>-->


@stop