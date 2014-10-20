

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">


    <!-- CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link href="<?php echo $this->config->base_url('assets/css/bootstrap-responsive.css');?>" type="text/css" rel="stylesheet" />
    <link href="<?php echo $this->config->base_url('assets/css/bootstrap.css');?>" type="text/css" rel="stylesheet" />

    <!-- CSS -->




    <!-- Le styles -->
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 60px;
      }

      /* Custom container */
      .container {
        margin: 0 auto;
        max-width: 1000px;
      }
      .container > hr {
        margin: 60px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 80px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 100px;
        line-height: 1;
      }
      .jumbotron .lead {
        font-size: 24px;
        line-height: 1.25;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }

      /* Customize the navbar links to be fill the entire space of the .navbar */
      .navbar .navbar-inner {
        padding: 0;
      }
      .navbar .nav {
        margin: 0;
        display: table;
        width: 100%;
      }
      .navbar .nav li {
        display: table-cell;
        width: 15%;
        float: none;
      }
      .navbar .nav li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .navbar .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .navbar .nav li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }
    </style>


</head>

<body>

    <div class="container">

        <div class="masthead">
            <h3 class="muted">漫畫店</h3>
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container">
                        <ul class="nav">
                            <li class="active"><a href="#">首頁</a></li>
                            <li><a href="A">會員專區</a></li>
                            <li><a href="B">借閱</a></li>
                            <li><a href="C">查詢</a></li>
                            <li><a href="D">儲值</a></li>
                            <li><a href="talkroom">留言板</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.navbar -->
        </div>

        <!-- Jumbotron -->
        <div class="jumbotron">
            <p class="lead">歡迎來到怪怪屋</p>
        </div>

        <hr>

        <!-- Example row of columns -->
       
        <div class="footer">
            <p>&copy; Company 2013</p>
        </div>

    </div>

</body>
</html>

