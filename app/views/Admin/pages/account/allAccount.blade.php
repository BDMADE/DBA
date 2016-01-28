@extends('Admin/layout')

@section('content')
@include('Admin/flash_msg')

@if($account->isEmpty())
<p>There are no Form takers!</p>
@else


<div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Accounts Table</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Form No.</th>
                                                <th>Membership No.</th>
                                                <th>From</th>
                                                <th>To</th>
                                                <th>Total</th>
                                                <th>Bank Statement</th>
                                                <th>Submission Time</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                           @foreach($account as $ac)
    <tr>
        <td>{{ $ac->id }}</td>
        <td>{{ $ac->membership_id }}</td>
        <td>{{ $ac->from }}</td>
        <td>{{ $ac->to}}</td>
        <td>{{ $ac->totals }}</td>
        <td>
            <?php
            
            $bank=$ac->bank_statement;
            ?>
            
            @if($bank==1)
            <button class="btn btn-block btn-flat btn-success">Yes</button>
            
            @else
            <button class="btn btn-block btn-sm btn-danger">No</button>
            
            @endif
            
            </td>
        <td>{{ $ac->updated_at}}</td>
        
        <td><a href="{{ action('AdminAccountController@bankStatement',$ac->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Edit</a></td>
        
    </tr>
    
    @endforeach
                                        </tbody>
                                        
                                      @endif
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            

                            
                            <script type="text/javascript">
            $(function() {
                
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": true,
                    "bSort": false,
                    "bInfo": true,
                    "bAutoWidth": true
                });
            });
        </script>
@stop