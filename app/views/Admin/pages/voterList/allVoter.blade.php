@extends('Admin/layout')

@section('content')
@include('Admin/flash_msg')

@if($member->isEmpty())
<p>There are no Valid members!</p>
@else


<div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Current Voter List </h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Membership No.</th>
                                                <th>Name</th>
                                                <th>Present Address</th>
                                                <th>District</th>
                                                <th>Phone</th>
                                                <th>Status</th>                                                
                                               
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                           @foreach($member as $members)
    <tr>
        
        <td>{{ $members->membership_id }}</td>
        <td>{{ $members->name}}</td>
        <td>{{ $members->present_address}}</td>
        <td>{{ $members->district }}</td>
        <td>{{ $members->phone }}</td>
        <td>
            <?php
            
            $status=$members->status;
            ?>
            
            @if($status==0)
            <button class="btn btn-block btn-flat btn-danger">Invalid</button>
            
            @elseif($status==1)
            <button class="btn btn-block btn-flat btn-success">Valid</button>
           
            
            @endif
            
            </td>
        
        
        
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
                    "bFilter":false,
                    "bSort": false,
                    "bInfo": true,
                    "bAutoWidth": true
                });
            });
        </script>
@stop