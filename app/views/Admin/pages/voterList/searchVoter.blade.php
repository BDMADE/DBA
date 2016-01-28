@extends('Admin/layout')

@section('content')
@include('Admin/flash_msg')

<div class="panel panel-default">
    <div class="panel-body">
        {{Form::open(array('action'=>'AdminVoterController@handleSearch','id'=>'searchVoter'))}}

        <div class="col-md-6">
        <div class="form-group">
            <label>Up To Valid</label>
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                <input type="text" name="searchVoter" class="form-control pull-right" id="from"/>
            </div><!-- /.input group -->
        </div>
        </div>
        
        <div class="col-md-6">
        <div class="form-group">
            <label>Press it to see voter list</label>
            <div class="input-group">
                
                <input type="submit" name="go" class="btn btn-flat btn-success"  value="Go!"/>
            </div><!-- /.input group -->
        </div>
        </div>
    </div>
    
</div>

{{Form::close()}}
<script>
	$(function() {
		var dates = $( "#from").datepicker({
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