@extends('Admin/layout')

@section('content')
@include('Admin/flash_msg')



{{Form::open(array('action'=>'AdminAccountController@handleBankStatement','id'=>'editBank'))}}
<div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Edit Bank Statement</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="bankDoc" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Form No.</th>
                                                <th>Membership No.</th>
                                                <th>From</th>
                                                <th>To</th>
                                                <th>Total</th>
                                                <th>Bank Statement</th>
                                                
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                           
    <tr>
        <td>{{ $account->id }}</td>
        <td>{{ $account->membership_id }}</td>
        <td>{{ $account->from }}</td>
        <td>{{ $account->to}}</td>
        <td>{{ $account->totals }}</td>
        <td>
            <div class="form-group">
                                           
<select class="form-control" name="bank_statement">
    <option value="0">No</option>
    <option value="1">Yes</option>
 
</select>
</div>
            
            </td>
            <td><input type="submit" class="btn btn-block btn-success" value="save"/></td>
        
        
        
    </tr>
    
   
                                        </tbody>
                                        
                                     
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            
<input type="hidden"  name="account"  value="{{$account->id}}"/>

{{form::close()}}
                            
                            <script type="text/javascript">
            $(function() {
                
                $('#bankDoc').dataTable({
                    "bPaginate": false,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": false,
                    "bInfo": true,
                    "bAutoWidth": true
                });
            });
        </script>
@stop