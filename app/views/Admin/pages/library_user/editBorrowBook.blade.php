@extends('Admin/layout')

@section('content')

<div class="container">
    {{Form::open(array('action'=>'AdminLibraryUserController@handleEdit','id'=>'editBook'))}}
<div class="row">
                        <!--1st row left column -->
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="box box-solid box-danger">
                                <div class="box-header">
                                    <h3 class="box-title">Book Reader Entry</h3>
                                    
                                </div><!-- /.box-header -->
                                <!-- form start -->
                              
                                    <div class="box-body">
                                        
                                        <div class="form-group">
                                            <label>Membership Id</label>
                                            <input type="text" name="membership_id" class="form-control" id="membership_id" placeholder="Enter Membership No." required="" value="{{$borrow->membership_id}}" >
                                        </div>
                                        <div class="form-group">
                                            <label>Book Name</label>
                                            <input type="text" name="book_name" class="form-control" id="book_name" placeholder="Enter Book name" required=""  value="{{$borrow->book_name}}">
                                        </div>
                                        
                                       <div class="form-group">
                                        <label>Borrow Date</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" name="from" class="form-control pull-right" id="from" value="{{$borrow->borrow_date}}"/>
                                        </div><!-- /.input group -->
                                    </div>
                                        
                                         <div class="form-group">
                                        <label>Return Date</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" name="to" class="form-control pull-right" id="to" value="{{$borrow->return_date}}"/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group --> 
                                        
                                        <div class="form-group">
                                            
                                            <label>Copy</label>
                                            <input type="text" name="copy" class="form-control" id="copy" placeholder="Enter Copy" required="" value="{{$borrow->book_copy}}">
                                        </div>
                                        
                                       
                                        
</div>
                                
                            </div>
                            
                        </div>
  
  </div>
     <input type="submit" name='save' class="btn btn-success" value="Submit" id="save"/>
     
                   <a href="{{action('AdminLibraryUserController@formCancel')}}" class="btn btn-default">Please Cancel</a>
                   
                   <input type="hidden" name="borrow" value="{{$borrow->id}}"/>
                   
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

@stop