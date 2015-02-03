<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Signin Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="/Public/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/Public/css/signin.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container">
      <div class="row">
      <div class="col-xs-9 login">
      	 <div class="col-md-6" style="float:right;">
		      <form class="form-horizontal">
		        <h3 class="form-signin-heading">Please sign in</h3>
		         <div class="form-group">
		         	<div class="col-sm-8">
				    	<input type="email" id="inputEmail" class="form-control input-sm" placeholder="Email address" required autofocus>
				    </div>
				  </div>
		        <div class="form-group" style="margin-bottom:0px;">
		        	<div class="col-sm-8">
			    		<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
			    	</div>
			  	</div>
			  	<a class="btn btn-link" style="color: #848484;font-size: 12px;" href="/index.php?s=/home/user/mi.html">忘记密码？</a>
		        <label for="inputPassword" class="sr-only">Password</label>
		        <div class="form-group">
			        <div class="checkbox col-sm-5">
			          <label>
			            <input type="checkbox" value="remember-me"> Remember me
			          </label>
			        </div>
			        <div class="col-sm-3">
			        	<button class="btn btn-primary btn-success btn-sm" type="submit">Sign in</button>
			        </div>
		        </div>
		      </form>
	     </div>
	     
	     <div class="col-md-6 col-xs-12">
            <div class="hidden-xs hidden-sm lg_center"></div>
            <div class="hidden-xs hidden-sm" style="margin: 21px 0 16px 40px;">
                <img class="img-responsive" src="/Public/images/login_img.png" alt="">
            </div>

            <div style="margin-top: 35px;">
            </div>
        </div>
        <div class="hidden-xs hidden-sm lg_center" style=" border-left: 1px solid #d8d9db;border-right: 1px solid #ffffff;float: left;height: 240px;margin: 40px 0 10px -3px;width: 1px;"></div>
	      </div>
	     </div>
	     <div class="row"><div class="col-xs-9 col-xs-offset-1" style="border-bottom: 1px solid #ffffff;border-top: 1px solid #d8d9db;height: 0;margin-top: 20px;"></div></div>
	</div>
<!-- /container -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>