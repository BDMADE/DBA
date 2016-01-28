<?php $book=Library::all();?>




 @foreach($book as $lib)
 {{$lib->book_name}}
 <input type="checkbox" name="" value="{{$lib->book_name}}"/>
<br/>
@endforeach


<div class="row">
                        <?php $book=Library::all();?>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="checkbox">
                                <label>Book Name</label>
                                @foreach($book as $lib)
                                {{$lib->book_name}}
                                <input type="checkbox" name="book_name" class="form-control" id="book_name" value="{{$lib->book_name}}" required="" >
                            @endforeach
                            
                            </div>
                            
                            </div>
                            
                        </div>
                    </div>