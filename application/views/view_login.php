<!DOCTYPE html>
<?php
  if(!empty($_POST)){
    print_r($_POST);
  }
?>
<!-- <head>
    <meta charset="UTF-8">
    <title>Fire.app Demo</title>
    <link rel="stylesheet" hraef="///maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" type="text/css" />
</head> -->

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>book store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" hraef="///maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" type="text/css" />
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 50px 70px 50px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="/Content/bootstrap/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="/Scripts/bootstrap/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/Images/bootstrap/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/Images/bootstrap/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/Images/bootstrap/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/Images/bootstrap/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="/Images/bootstrap/ico/favicon.png">
</head>

<body>

    <div class="container">

        <form class="form-signin">
        <form class="form-signin" action="/ci/index.php/checkout" method="POST">
            <h1 class="form-signin-heading">Please sign in</h1>
            
            <input type="text" class="input-block-level" id="inputEmail" placeholder="帳號" name="id" maxlength="20">


            <input type="password" class="input-block-level" id="inputPassword" placeholder="密碼" name="password" maxlength="20"> 
            <label class="checkbox">
                <BR>
            <input type="checkbox" value="remember-me">
                Remember me

            </label>
            <BR>
                <button type="submit" class="btn">登入</button>
        </form>

    </div>
    <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/bundles/bootstrapSourceJS?v=XkouIldXq_pPzIiEbylJIGwgBv2qYDSef1Dnn06aIkQ1"></script>





</body></html>








<!-- 

    <form class="bs-docs-example form-horizontal" 
    action="/ci/index.php/checkout" method="POST">
        <div class="control-group">
            <label class="control-label" for="inputEmail">帳號</label>
            <div class="controls">
                <input type="text" id="inputEmail" placeholder="帳號" 
                name="id">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">密碼</label>
            <div class="controls">
                <input type="password" id="inputPassword" placeholder="密碼"
                name="password">
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <label class="checkbox">
                    <input type="checkbox">記住我
                </label>
                <button type="submit" class="btn">登入</button>
                <button type="submit" class="btn">忘記密碼</button>
            </div>
        </div>
    </form>
</div> -->
</body>

</html>