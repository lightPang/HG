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
    <html lang="en">
  <head>
    <title>asdf</title>

    
    <script type="text/javascript" src="__PUBLIC__/js/jquery-2.0.2.js"></script>
    <script type="text/javascript" charset="utf-8" src="__PUBLIC__/js/editCourse.js"></script>
    <script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');
    </script>
  </head>
  <body>
    
    <div class="container contact-container">
      <form method="post" action="__APP__/CourseEdit/submit" >
        <script id="editor" name="content" type="text/plain"><?php echo ($content); ?></script>
        <input type="hidden" name="c_id" value="<?php echo ($c_id); ?>"/>
        <button class="btn" type="submit" >保存</button>
        <button class="btn" type="button"onclick ="preview()" >预览</button>
    </form>
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