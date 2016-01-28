


<!DOCTYPE html>
<html class="bg-white">
    <head>
        <meta charset="UTF-8">
        <title>DBA | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        	
		<!-- bootstrap 3.0.2 -->
<link href="{{url('AdminBox/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<!-- font Awesome -->
<link href="{{url('AdminBox/assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />

<!-- Theme style -->
<link href="{{url('AdminBox/assets/css/AdminLTE.css')}}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-white">
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

        <div class="form-box" id="login-box">
            <div class="header">Dhaka Bar Association</div>
            {{Form::open(array('action'=>'UserController@handleLogin'))}}
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="username"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>          
                    <div class="form-group">
                        <input type="checkbox" name="remember" value="check"/> Remember me
                    </div>
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block">Sign me in</button>  
                    
                   
                    
                   
                </div>
            {{Form::close()}}

            
        </div>


       <!-- jQuery UI 1.10.3 -->
<script src="{{url('AdminBox/assets/js/jquery-ui-1.10.3.min.js')}}" type="text/javascript"></script>

<!-- Bootstrap -->
<script src="{{url('AdminBox/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>

    </body>
</html>