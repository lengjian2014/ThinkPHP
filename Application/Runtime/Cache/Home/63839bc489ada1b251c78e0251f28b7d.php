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
    <!-- Bootstrap core CSS -->
    <link href="/Public/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
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
				<ul class="nav ucenter-bar">
		            <li>
		            	<a href="#"><span class="glyphicon glyphicon-home">账户管理</span></a>
		            	<ul class="nav ucenter-bar-two">
				            <li><a href="#"><span class="glyphicon glyphicon-home">账户管理</span></a></li>
				            <li><a href="#shop"><span class="glyphicon glyphicon-shopping-cart">商品管理</span></a></li>
				            <li><a href="#support"><span class="glyphicon glyphicon-headphones">交易管理</span></a></li>
				            <li><a href="#support"><span class="glyphicon glyphicon-headphones">消息中心</span></a></li>
				            <li><a href="#support"><span class="glyphicon glyphicon-headphones">我的收藏</span></a></li>
		          		</ul>
		            </li>
		            <li><a href="#shop"><span class="glyphicon glyphicon-shopping-cart">商品管理</span></a></li>
		            	<ul class="nav ucenter-bar-two">
				            <li><a href="#shop"><span class="glyphicon glyphicon-shopping-cart">商品管理</span></a>
		          		</ul>
		          	</li>	
		            <li><a href="#support"><span class="glyphicon glyphicon-headphones">交易管理</span></a>
		            	<ul class="nav ucenter-bar-two">
				            <li><a href="#shop"><span class="glyphicon glyphicon-shopping-cart">商品管理</span></a></li>
		          		</ul>		
		            </li>
		            <li><a href="#support"><span class="glyphicon glyphicon-headphones">消息中心</span></a>
		            	<ul class="nav ucenter-bar-two">
				            <li><a href="#shop"><span class="glyphicon glyphicon-shopping-cart">商品管理</span></a></li>
		          		</ul>
		            </li>
		            <li><a href="#support"><span class="glyphicon glyphicon-headphones">我的收藏</span></a>
		            	<ul class="nav ucenter-bar-two">
				            <li><a href="#shop"><span class="glyphicon glyphicon-shopping-cart">商品管理</span></a></li>
		          		</ul>
		            </li>
          		</ul>
			</div>
			<div class="col-md-10">
							<div class="container-fluid">
				<ol class="breadcrumb" style="background-color: #fff;">
				  <li><a href="#">��������</a></li>
				  <li><a href="#">��Ʒ����</a></li>
				  <li class="active">��Ʒ�б�-����</li>
				</ol>
					<div class="ucenter-content">
							<form class="form-horizontal" role="form">
						   <div class="form-group">
						      <label class="col-sm-2 control-label">��Ʒ����</label>
						      <div class="col-sm-6">
						      		<input class="form-control" id="disabledInput" type="text" value="" name="goods_name">
						      </div>
						   </div>
						    <div class="form-group">
						      <label class="col-sm-2 control-label">��������</label>
						      <div class="col-sm-6">
						         <select multiple class="form-control" name="category_id">
								  <option>��Ϸ</option>
								  <option>С˵</option>
								  <option>�Դ�</option>
								  <option>����</option>
								</select>
						      </div>
						   </div>
						   <div class="form-group">
						      <label class="col-sm-2 control-label">��Ʒ���</label>
						      <div class="col-sm-6">
						         <input class="form-control" id="disabledInput" type="text" value="" name="goods_introduct">
						      </div>
						   </div>
						   <div class="form-group">
						      <label class="col-sm-2 control-label">
						         ͼƬ
						      </label>
						      <div class="col-sm-6">
						         <span class="btn btn-success fileinput-button">
							        <i class="glyphicon glyphicon-plus"></i>
							        <span>Add files...</span>
							        <!-- The file input field used as target for the file upload widget -->
							        <input id="fileupload" type="file" name="files[]" multiple>
								    </span>
								    <br>
								    <br>
								    <!-- The global progress bar -->
								    <div id="progress" class="progress">
								        <div class="progress-bar progress-bar-success"></div>
								    </div>
								    <!-- The container for the uploaded files -->
								    <div id="files" class="files"></div>
						      </div>
						   </div>
						   <div class="form-group">
						      <label class="col-sm-2 control-label">
						         ��ϸ����
						      </label>
						      <div class="col-sm-6">
						         <textarea class="form-control" rows="3" name="goods_detail"></textarea>
						      </div>
						   </div>
						   <div class="form-group">
						      <label class="col-sm-2 control-label" for="inputError">
						      </label>
						      <div class="col-sm-6">
						         <button type="submit" class="btn btn-primary">Submit</button>
						      </div>
						   </div>
						</form>
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
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>