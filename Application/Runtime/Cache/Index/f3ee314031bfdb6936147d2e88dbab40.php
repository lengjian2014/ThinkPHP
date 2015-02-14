<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>草垛子-注册</title>
    <!-- Bootstrap core CSS -->
    <link href="/Public/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/Public/css/main.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background:#FFF url(/Public/images/53954846d4ee5.jpg) no-repeat fixed center;background-position:-350px -220px;;">
         <nav  class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container" style="padding-left: 15px;">
        <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
      		</button>
      		<a class="navbar-brand" href="#" style="color:#4cae4c;font-size: 22px;"><b>草垛子</b></a>
        </div>
        <div class="collapse navbar-collapse" style="background-color: #fff">
        	<ul class="nav navbar-nav">
	            <li><a href="/"><span class="glyphicon glyphicon-home">首页</span></a></li>
	            <li><a href="/index/search"><span class="glyphicon glyphicon-search">搜索</span></a></li>
	            <li><a href="#news"><span class="glyphicon glyphicon-list">资讯</span></a></li>
	            <li><a href="#support"><span class="glyphicon glyphicon-th-large">论坛</span></a></li>
          	</ul>
          	<ul class="nav nav-login">
		        <li><a href="javascript:void(0);" onclick="window.location.href='/index/login'">登录</a></li>
		       <li><a href="javascript:void(0);" onclick="window.location.href='/index/register'">注册</a></li>
          	</ul><!--/.navbar-collapse -->
      	</div>
      </div>
    </nav>
    <div class="container">
      <div class="row">
      <div class="col-md-9 login">
      	 <div class="form-signin" style="float:right;">
		      <form class="form-horizontal" style="height:250px;width:320px;">
		        <h3 class="form-signin-heading" style="font-size:14px;color:#848484; margin-bottom: 15px;margin-top: 13px;">没有账号？那就注册吧</h3>
		        <p style="display:none;font-size:12px;color:red;text-align:center;">账号密码错误</p>
		         <div class="form-group">
		         	<div class="col-md-12">
				    	<input type="email" id="inputEmail" class="form-control" placeholder="用户名" required autofocus>
				    </div>
				  </div>
				  <div class="form-group">
		         	<div class="col-md-12">
				    	<input type="email" id="inputEmail" class="form-control" placeholder="邮箱" required autofocus>
				    </div>
				  </div>
		        <div class="form-group">
		        	<div class="col-md-12">
			    		<input type="password" id="inputPassword" class="form-control" placeholder="密码" required>
			    	</div>
			  	</div>
			  	<div class="form-group" style="margin-bottom:0px;">
		        	<div class="col-md-12">
			    		<input type="password" id="inputPassword" class="form-control" placeholder="验证密码" required>
			    	</div>
			  	</div>
			  	<a class="btn btn-link" style="color: #848484;font-size: 12px;" href="/index.php?s=/home/user/mi.html"></a>
		        <div class="form-group" style="padding:0px 15px;">
			        <div style="float:right;">
			        	<button class="btn btn-primary btn-default btn-sm" type="submit">注&nbsp;&nbsp;&nbsp;册</button>
			        </div>
		        </div>
		        <div class="form-group" style="padding:10px 15px 0px 15px;margin-bottom:0px;">
			        <div style="float:left;padding:5px 0px;">
						<p style="font-size:13px;color:#848484;">有账号？<a>去登录</a></p>
			         </div>
			         <div style="float:right;">
			         	<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone"></a><a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina"></a><a title="分享到腾讯微博" href="#" class="bds_tqq" data-cmd="tqq"></a><a title="分享到人人网" href="#" class="bds_renren" data-cmd="renren"></a><a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin"></a></div>
						<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
		        	</div>
		        </div>			
		      </form>
	     </div>
	      </div>
	     </div>

	     <footer class="" role="contentinfo" style="text-align: center;margin-top: 245px;">
		  <div class="container">
		    <p>Designed and built with all the love in the world by <a href="http://twitter.com/mdo" target="_blank">@mdo</a> and <a href="http://twitter.com/fat" target="_blank">@fat</a>.</p>
		    <p>Maintained by the <a href="https://github.com/twbs?tab=members">core team</a> with the help of <a href="https://github.com/twbs/bootstrap/graphs/contributors">our contributors</a>.</p>
		    <p>本项目源码受 <a href="https://github.com/twbs/bootstrap/blob/master/LICENSE" target="_blank">MIT</a> 开源协议保护，文档受 <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a> 开源协议保护。</p>
		    <ul class="bs-docs-footer-links muted">
		      <li>当前版本： v3.2.0</li>
		      <li>&middot;</li>
		      <li><a href="https://github.com/twbs/bootstrap">GitHub 仓库</a></li>
		      <li>&middot;</li>
		      <li><a href="../getting-started/#examples">实例精选</a></li>
		      <li>&middot;</li>
		      <li><a href="http://v2.bootcss.com/">v2.3.2 中文文档</a></li>
		      <li>&middot;</li>
		      <li><a href="../about/">关于</a></li>
		      <li>&middot;</li>
		      <li><a href="http://expo.bootcss.com">优站精选</a></li>
		      <li>&middot;</li>
		      <li><a href="http://blog.getbootstrap.com">官方博客</a></li>
		      <li>&middot;</li>
		      <li><a href="https://github.com/twbs/bootstrap/issues?state=open">Issues</a></li>
		      <li>&middot;</li>
		      <li><a href="https://github.com/twbs/bootstrap/releases">历史版本</a></li>
		    </ul>
		  </div>
		</footer>
	</div>
  </body>
</html>