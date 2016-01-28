<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Authentication</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css') }}" />
    <script src="{{asset('assets/bootstrap/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>

</head>
<body>
<div class="container">

@if(Auth::guest())
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <a href="{{action('UserController@home')}}" class="navbar-brand">Home</a>
            <a href="{{action('UserController@create')}}" class="navbar-brand">Registration</a>
            <a href="{{action('UserController@login')}}" class="navbar-brand">Login</a>
            <a href="{{action('AdminController@home')}}" class="navbar-brand">Admin</a>          

        </div>
    </nav>
	
	@endif
	
	 @if(Auth::check())
	 <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <a href="{{action('UserController@home')}}" class="navbar-brand">Home</a>            
            <a href="{{action('AdminController@home')}}" class="navbar-brand">Admin</a>
			<a href="{{action('UserController@logout')}}" class="navbar-brand">Logout</a>	

        </div>
    </nav>
            
            @endif

    <!-- check for flash notification message -->
    @if(Session::has('flash_notice'))

    <div class="alert alert-success fade in">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ Session::get('flash_notice') }}
    </div>

    @endif


    @yield('content')
</div>

</body>

</html>