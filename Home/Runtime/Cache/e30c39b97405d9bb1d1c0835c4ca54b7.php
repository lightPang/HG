<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>华冠俱乐部</title>
    <link href="__PUBLIC__/JPG/tabicon.jpg" mce_href="favicon.ico" rel="bookmark" type="image/x-icon" /> 
    <link href="__PUBLIC__/JPG/tabicon.jpg" mce_href="favicon.ico" rel="icon" type="image/x-icon" /> 
    <link href="__PUBLIC__/JPG/tabicon.jpg" mce_href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <!-- Bootstrap -->
    <link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet">
    <link href="__PUBLIC__/css/my.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="__PUBLIC__/js/jquery-1.11.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="__PUBLIC__/js/bootstrap.min.js"></script>
    <script src="__PUBLIC__/js/functional.js"></script>
  </head>
  <body>
    <div class="navbar navbar-default navbar-static-top my_nav" role="navigation">
      <div class="container">
        <div class="navbar-header my-nav-head">
          <div class="head-icon"><img class="icon" src="__PUBLIC__/JPG/icon.png" /></div>
          <div class="head-title" ><p>华冠俱乐部</p><p class="head-content">可能是最好的电子商务社群</p></div>
          <div style="clear:both"></div>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" id="menu_bar">
            <li><a href="__APP__/Application">报名查看</a></li>
            <li><a href="__APP__/CourseEdit">课程发布</a></li>
            <li><a href="__APP__/NewsEdit">新闻发布</a></li>
            <?php if(($isAdmin) == "1"): ?><li><a href="__APP__/User">用户管理</a></li><?php endif; ?>
            <li><a href="__APP__/User/logOut">退出</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    ﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
  
  <script src="__PUBLIC__/js/user.js"></script>
  <script src="__PUBLIC__/js/jquery.md5.js"></script>
</head>

<body>
	
	<div class="container contact-container">
  
    <div class="panel-heading">增加用户</div>
		<form class="form-horizontal" action="__APP__/User/addUser" role="form" method="post">
			<table class="table table-bordered my_table" id="user_table">
				<tr>
					<td >用户名: <input name="name"></td>
          <td >账号: <input name="account"></td>
					<td >密码: <input id="pwd" type="password" ><input id="submitPwd" type="hidden" name="pwd"/></td>
					<td ><button id="submitBtn" class="uploadbtn default-btn" type="button" onclick="addUser()">保存</button></td>
				</tr>
			</table>
			
		</form>
    
		<div class="panel-heading">用户列表</div>
			<table class="table table-bordered my_table" id="user_table">
			<tr>
				<td>ID</td>
				<td>用户名</td>
				<td>账号</td>
				<td>删除用户</td>
			</tr>
			<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
					<td><?php echo ($i); ?></td>
					<td><?php echo ($vo["name"]); ?></td>
          <td><?php echo ($vo["account"]); ?></td>
					<td><a href="__APP__/User/delUser?u_id=<?php echo ($vo["u_id"]); ?>">删除</a></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</table>
    
	</div>
	


	
</body>
</html>


    
    <div class="footer">
      <div class="foot-logoinfo">
        <div class="foot-logo">
          <img class="icon" src="__PUBLIC__/JPG/icon.png" />
        </div>
        <div class="foot-title">
          <p class="foot-titlename">华冠俱乐部</p><p class="foot-titleinfo">可能是最好的电子商务社群</p>
        </div>
      </div>
      <div style="clear:both"></div>
      <div class="foot-pageinfo">
        <p class="footer-content-text">京ICP备13025326号-2 | 京公网安备11010802012368号</p>
      </div>
      <div style="clear:both"></div>
      <div class="foot-companyinfo">
        <p class="footer-content-text">Copyright © 2012-2014 HiWiFi.com</p>
      </div>
      <div style="clear:both"></div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <input type="hidden" name="activeTab" id="activeTab" value="<?php echo ($activeTab); ?>"/>
  </body>
</html>