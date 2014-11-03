<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


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
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 400px;
        padding: 15px 15px 15px;
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

</head>
<body>


<table class="table table-hover table-bordered">

<?php 
    foreach ($dataAry as $key => $value) {
       echo "<tr><td>".
        "id = ". $value->id. "</td><td>".
        "name =". $value->name. "</td><td>".
        "message =". $value->message. "</td>".
        "</tr>";
        }
?>
</table>
    <a href="insert">insert</a>
    
    <div class="bs-example pagination-centered">
        <ul class="pagination">

        <li><a href="/ci/index.php/talk?page=<?php
        if($page < floor(($datatotal/$pages_row)))
        echo $page;
        else
         echo $page-1; ?>">
            上一頁</a></li>
            
        <?php for ($i=0; $i < $datatotal/$pages_row; $i++) { ?>
        <li><a href="/ci/index.php/talk?page=<?php echo $i+1; ?> ">
        <?php echo $i+1; ?>
        </a></li>
        <?php } ?>
        <li><a href="/ci/index.php/talk?page=
            <?php if($page > floor(($datatotal/$pages_row)))
                    echo $page;
                    else
                    echo $page+1; ?>">
            下一頁</a></li>    
    </ul>
    </div>
    




</body>
</html>