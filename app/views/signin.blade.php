@extends('layout')
@section('content')

@if (Session::has('flash_error'))
<div id="flash_error" class=" alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ Session::get('flash_error') }}</div>
@endif

@if (Session::has('flash_admin_login'))
<div id="flash_admin_login" class=" alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ Session::get('flash_admin_login') }}</div>
@endif

{{Form::open(array('action'=>'UserController@handleLogin'))}}

    <div class="form-group">
        <p><label for="username">Username:</label></p>
        <p><input type="text" name="username" class="form-control required" placeholder="Username" /></p>
    </div>



   <!-- <div class="form-group">
        <p><label for="email">Email:</label></p>
        <p><input type="email" name="email"  class="form-control required" placeholder="Email" /></p>
    </div>-->

    <div class="form-group">
        <p><label for="password">Password:</label></p>
        <p><input type="password" name="password" class="form-control required" placeholder="Password" /></p>
    </div>

   <p><label for="remember">Remember:</label><input type="checkbox" name="remember" value="check"></p>



    <p><input type="submit" value="Signin"   class="btn btn-primary"/></p>

    {{Form::close()}}






@stop