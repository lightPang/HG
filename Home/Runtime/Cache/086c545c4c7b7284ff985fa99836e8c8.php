<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="__PUBLIC__/JPG/tabicon.jpg" mce_href="favicon.ico" rel="bookmark" type="image/x-icon" /> 
    <link href="__PUBLIC__/JPG/tabicon.jpg" mce_href="favicon.ico" rel="icon" type="image/x-icon" /> 
    <link href="__PUBLIC__/JPG/tabicon.jpg" mce_href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <title>HG Club Signin</title>

    <!-- Bootstrap core CSS -->
    <link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="__PUBLIC__/css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form action="__APP__/User/logIn" class="form-signin" role="form" method="post">
        <h2 class="form-signin-heading">Wellcome to HG Club!</h2>
        <input name='account' class="form-control" placeholder="Admin Account" required autofocus>
        <input id="inputPwd" type="password" class="form-control" placeholder="Password" required>
        <input id="submitPwd" name="pwd" type="hidden"/>
        <!--
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        !-->
        <button class="btn btn-lg btn-primary btn-block" type="button" onclick="logIn()">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="__PUBLIC__/js/jquery-1.11.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="__PUBLIC__/js/bootstrap.min.js"></script>
    <script src="__PUBLIC__/js/jquery.md5.js"></script>
    <script src="__PUBLIC__/js/logIn.js"></script>
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>