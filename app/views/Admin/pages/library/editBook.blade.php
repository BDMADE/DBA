@extends('Admin/layout')

@section('content')

<div class="container">
    {{Form::open(array('action'=>'AdminLibraryController@handleEdit','id'=>'editBook'))}}
<div class="row">
                        <!--1st row left column -->
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="box box-solid box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Book Entry</h3>
                                    
                                </div><!-- /.box-header -->
                                <!-- form start -->
                              
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Book Name</label>
                                            <input type="text" name="book_name" class="form-control" id="book_name" value="{{$library->book_name}}" placeholder="Enter Book name" required="" >
                                        </div>
                                        <div class="form-group">
                                            
                                            <label>Copy</label>
                                            <input type="text" name="copy" class="form-control" id="copy" value="{{$library->book_copy}}" placeholder="Enter Copy" required="" >
                                        </div>
                                        
                                        
                                        
</div>
                                
                            </div>
                            
                        </div>
  </div>
     <input type="submit" name='save' class="btn btn-success" value="Submit" id="save"/>
     <input type="reset" name='clear' class="btn btn-primary" value="Reset" id="reset"/>
                   <a href="{{action('AdminLibraryController@formCancel')}}" class="btn btn-default">Please Cancel</a>
                   
                   <input type="hidden" name="library" value="{{$library->id}}"/>
                   
                                        {{Form::close()}}
    


</div>

@stop