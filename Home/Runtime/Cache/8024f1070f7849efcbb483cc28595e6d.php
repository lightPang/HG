<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Picourse Signin</title>

    <!-- Bootstrap core CSS -->
    <link href="/picourse/Picourse/Tpl/Common/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/picourse/Picourse/Tpl/Common/css/signin.css" rel="stylesheet">

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

      <form action="__URL__/log_in" class="form-signin" role="form">
        <h2 class="form-signin-heading">Wellcome to Picourse!</h2>
        <input name='username' class="form-control" placeholder="Admin Account" required autofocus>
        <input name='pwd' type="password" class="form-control" placeholder="Password" required>
        <!--
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        !-->
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>