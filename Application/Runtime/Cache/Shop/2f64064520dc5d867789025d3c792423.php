<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>放心农场-首页</title>
    <link href="/Public/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="/Public/css/main.css" rel="stylesheet">
  </head>
  <body>
  	    <nav  class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container" style="padding-left: 15px;">
        <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
      		</button>
        </div>
        <div class="collapse navbar-collapse" style="background-color: #fff">
        	<ul class="nav navbar-nav">
	            <li><a href="#"><span class="glyphicon glyphicon-home">首页</span></a></li>
	            <li><a href="#shop"><span class="glyphicon glyphicon-shopping-cart">小说</span></a></li>
	            <li><a href="#support"><span class="glyphicon glyphicon-headphones">游戏</span></a></li>
          	</ul>
          	<ul class="nav nav-login">
		        <li><a href="#shop">登录</a></li>
		       <li><a href="#support">注册</a></li>
          	</ul><!--/.navbar-collapse -->
      	</div>
      </div>
    </nav>
	<div class="jumbotron search-jumbotron">
    	<div class="container">
			<div class="row" style="margin-left: 0px;margin-right: 0px;text-align:center;">
					<div class="search-title"><span><span style="font-size:35px;">北京放心农场</span></span></div> 
			</div>
		  </div>
	</div>
	<div class="container">
	    <div class="row">
			<div class="col-md-2" style="padding-left: 30px;padding-right: 0;">
				<ul class="nav ucenter-bar" style="height:500px">
	<li><a href="#shop"><span class="glyphicon glyphicon-shopping-cart">店铺管理</span></a>
		 <ul class="nav ucenter-bar-two">
			<li><a href="index"><span class="glyphicon glyphicon-shopping-cart">我的店铺</span></a></li>
			<li><a href="create"><span class="glyphicon glyphicon-shopping-cart">店铺设置</span></a></li>
			<li><a href="create"><span class="glyphicon glyphicon-shopping-cart">认证设置</span></a></li>
		  </ul>
	</li>
	<li><a href="#shop"><span class="glyphicon glyphicon-shopping-cart">我的记录</span></a>
		 <ul class="nav ucenter-bar-two">
			<li><a href="/shop/record/index"><span class="glyphicon glyphicon-shopping-cart">记录列表</span></a></li>
			<li><a href="/shop/record/create"><span class="glyphicon glyphicon-shopping-cart">新增记录</span></a></li>
		  </ul>
	</li>
	<li><a href="#shop"><span class="glyphicon glyphicon-shopping-cart">商品管理</span></a>
		 <ul class="nav ucenter-bar-two">
			<li><a href="/shop/goods/index"><span class="glyphicon glyphicon-shopping-cart">商品列表</span></a></li>
			<li><a href="/shop/goods/create"><span class="glyphicon glyphicon-shopping-cart">新增商品</span></a></li>
		  </ul>
	</li>	
</ul>
			</div>
			<div class="col-md-10">
								<div class="container-fluid">
					<ol class="breadcrumb-time" style="background-color: #fff;">
					  <li role="group"><div class="dropdown">
							  <span class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
							    <span id="Menu1">2015年</span><span class="caret"></span>
							  </span>
							  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" style="min-width:20px">
							    <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:void(0)" onclick="$(this).html($('#Menu1').html());$('#Menu1').html('2014年')">2014年</a></li>
							    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2013年</a></li>
							    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2012年</a></li>
							    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2011年</a></li>
							  </ul>
							</div></li>
							<li role="group"><div class="dropdown">
							  <span class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="true">
							    02月<span class="caret"></span>
							  </span>
							  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2" style="min-width:20px">
							    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">01月</a></li>
							    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">03月</a></li>
							    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">04月</a></li>
							    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">05月</a></li>
							  </ul>
							</div></li>
							<li role="group"><div class="dropdown">
							  <span class="dropdown-toggle" id="dropdownMenu3" data-toggle="dropdown" aria-expanded="true">
							    05日<span class="caret"></span>
							  </span>
							  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu3" style="min-width:20px">
							    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">01日</a></li>
							    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">02日</a></li>
							    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">03日</a></li>
							    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">04日</a></li>
							  </ul>
							</div>
							</li>
					</ol>
					<div class="row" style="padding:2px;background-color: #e9e9e9;"></div>
					<div>
						<div class="time-day ">2015/01</div>
						<span class="glyphicon-trash-left"></span>
						<div style="padding:0 30px 20px 120px;">
							<div class="ucenter-time-content">
								<div class="row" style="background: none repeat scroll 0 0 #fff;margin-right: 0px;">
									<div class="col-md-3  time-item">
										<img width="100%" src="http://img4.duitang.com/uploads/item/201204/09/20120409232718_P3xvs.jpeg">
										<p style="margin: 3px;">[<span style="color:green;font-size:12px">喂养</span>]&nbsp;<span style="color:#9d9d9d;font-size:12px">2014年9月3日 -  在应用DIV布局时,有时会希望DIV的高度会随着内容的变化而变化,但是又想... 下一篇:div+css最小高度的设置方法兼容各浏览器ie6+/Firefox</span></p>
									</div>
									<div class="col-md-3  time-item">
										<img width="100%" src="/Public/images/6453013_133853054136_2.jpg">
									</div>
									<div class="col-md-3  time-item">
										<p>[<span style="color:green;font-size:12px">喂养</span>]&nbsp;<span style="color:#9d9d9d;font-size:12px">英文中Little Green Men(小绿人)代表外星人。 绿色是植物的颜色,在中国文化中还有生命的含义,可代表自然、生态、环保等,如绿色食品。绿色因为与春天有关</span></p>
									</div>
									<div class="col-md-3  time-item">
										<img width="100%" src="http://pic8.nipic.com/20100721/3320946_120805055897_2.jpg">
									</div>
									<div class="col-md-3  time-item">
										<img width="100%" src="http://pic3.nipic.com/20090608/2428326_144531008_2.jpg">
									</div>
									<div class="col-md-3  time-item">
										<img width="100%" src="http://pic3.nipic.com/20090608/2428326_144531008_2.jpg">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="padding:2px;background-color: #e9e9e9;"></div>
					<div>
					 	<div class="time-day ">2015/01</div>
						<span class="glyphicon-trash-left"></span>
						<div style="padding:0 30px 20px 120px;">
							<div class="ucenter-time-content">
								<div class="row" style="background: none repeat scroll 0 0 #fff;margin-right: 0px;">
									<div class="col-md-3  time-item">
										<img width="100%" src="http://pic3.nipic.com/20090608/2428326_144531008_2.jpg">
										<p style="margin: 3px;">[<span style="color:green;font-size:12px">喂养</span>]&nbsp;<span style="color:#9d9d9d;font-size:12px">2014年9月3日 -  在应用DIV布局时,有时会希望DIV的高度会随着内容的变化而变化,但是又想... 下一篇:div+css最小高度的设置方法兼容各浏览器ie6+/Firefox</span></p>
									</div>
									<div class="col-md-3  time-item">
										<img width="100%" src="http://pic16.nipic.com/20110930/7675400_052024815001_2.jpg">
									</div>
									<div class="col-md-3  time-item">
										<p>[<span style="color:green;font-size:12px">喂养</span>]&nbsp;<span style="color:#9d9d9d;font-size:12px">英文中Little Green Men(小绿人)代表外星人。 绿色是植物的颜色,在中国文化中还有生命的含义,可代表自然、生态、环保等,如绿色食品。绿色因为与春天有关</span></p>
									</div>
									<div class="col-md-3  time-item">
										<img width="100%" src="http://pic16.nipic.com/20110824/2839526_150423311860_2.jpg">
									</div>
									<div class="col-md-3  time-item">
										<img width="100%" src="http://pic28.nipic.com/20130412/8821914_210221671158_2.jpg">
									</div>
									<div class="col-md-3  time-item">
										<img width="100%" src="http://pic12.nipic.com/20101217/6453013_133853054136_2.jpg">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	    </div>         
	</div>
	<footer class="bs-docs-footer" role="contentinfo" style="background:#909090">
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
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/Public/js/jquery.min.js"></script>
    <script src="/Public/js/bootstrap.min.js"></script>
  </body>
</html>