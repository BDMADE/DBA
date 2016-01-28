@extends('Admin/layout')

@section('content')
@include('Admin/flash_msg')

@if($borrow->isEmpty())
<p>There are no Books!</p>

<div class="panel panel-default">
    <div class="panel-body">
        <a href="{{ action('AdminLibraryUserController@create') }}" class="btn btn-danger">Add Book User</a>
    </div>
</div>
@else

<div class="page-header">
    <h1>All Book User <small>We want to read those!</small></h1>
</div>


<div class="box-header">
                                    <h3 class="box-title">All Book User Information</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Membership No.</th>
                                                <th>Book Name</th>
                                                <th>Borrow Date</th>
                                                <th>Return Date</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                           @foreach($borrow as $book)
    <tr>
        
        <td>{{ $book->membership_id}}</td>
        <td>{{ $book->book_name}}</td>        
        <td>{{ $book->borrow_date}}</td>
        <td>{{ $book->return_date}}</td>
       
        
                                   
    
        
        
       
        
        
        <td>
           
         <a href="{{ action('AdminLibraryUserController@edit',$book->id)}}" class="btn btn-flat btn-primary"><i class="fa fa-edit"></i> Edit</a>
         
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
                    "bFilter": true,
                    "bSort": false,
                    "bInfo": true,
                    "bAutoWidth": true
                });
            });
        </script>
        
        
        
        <script type="text/javascript">
        
        /* =========================================================
**************************prettyPhoto***********************
==========================================================*/
jQuery(window).load(function(){
    jQuery("a[rel^='prettyPhoto']").prettyPhoto({
        overlay_gallery: false,
        "theme": 'light_rounded',
        keyboard_shortcuts: true,
        social_tools: false
    });
});
        
        
        </script>
@stop