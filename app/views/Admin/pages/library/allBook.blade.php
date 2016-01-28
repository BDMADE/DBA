@extends('Admin/layout')

@section('content')
@include('Admin/flash_msg')

@if($library->isEmpty())
<p>There are no Books!</p>

<div class="panel panel-default">
    <div class="panel-body">
        <a href="{{ action('AdminLibraryController@create') }}" class="btn btn-primary">Add Book</a>
    </div>
</div>
@else

<div class="page-header">
    <h1>All Books <small>We want to read those!</small></h1>
</div>


<div class="box-header">
                                    <h3 class="box-title">All Books Information</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Book Name</th>
                                                <th>Copy</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                           @foreach($library as $book)
    <tr>
        
        <td>{{ $book->id }}</td>
        <td>{{ $book->book_name}}</td>        
        <td>{{ $book->book_copy}}</td>
        <td><img src="{{url()}}/img/{{$book->book_img_name}}" class="img-responsive" style="width:40px;height:40px;" alt="No Image"/></td>
       
        
                                   
    
        
        
       
        
        
        <td>
            <a href="{{url()}}/img/{{$book->book_img_name}}" rel="prettyPhoto[galleriePhoto]" class="btn btn-flat btn-google-plus">View</a>
         <a href="{{ action('AdminLibraryController@edit',$book->id)}}" class="btn btn-flat btn-primary"><i class="fa fa-edit"></i> Edit</a>
         
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