@extends('Admin/layout')
@section('content')

@if(count($errors)>0)
<div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    @foreach($errors->all() as $message)
    <li>{{ $message }}</li>
    @endforeach

</div>

@endif

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Add User</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            {{Form::open(array('action'=>'AdminUserController@handleCreate'))}}
            <div class="box-body">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username"  name="username" placeholder="Enter Username">


                </div>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email"  name="email" placeholder="Enter email">
                </div>


                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password"  name="password" placeholder="Password">
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Role</label>
                            <select class="form-control" name="role">
                                <option>Administrator</option>
                                <option>Accountant</option>
                                <option>Librarian</option>

                            </select>
                        </div>
                    </div>
                </div>

            </div><!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-success">Submit</button>
                <input type="reset" name='clear' class="btn btn-primary" value="Reset" id="reset"/>
                <a href="{{action('AdminUserController@index')}}" class="btn btn-default">Please Cancel</a>
            </div>
            </form>
        </div><!-- /.box -->

    </div>
</div>
@stop