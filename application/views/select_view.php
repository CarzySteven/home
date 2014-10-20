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
</head>
<body>


<table class="table table-hover table-bordered">

<?php 
    foreach ($dataAry as $key => $value) {
       echo "<tr><td>".
        "id = ". $value->id. "</td><td>".
        "name =". $value->name. "</td><td>".
        "main =". $value->main. "</td><td>".
        "message =". $value->message. "</td><td>".
        "msgtime =". $value->sort. "</td><td>".
        "create =" . $value->create. "</td><td>".
        "modify =" . $value->modify. "</td><td>".
        "updated_at =". $value->updated_at. "</td><td>".
        "created_at =". $value->created_at. "</td>".
        "</tr>";
        }
?>
</table>
    <a href="insert">insert</a>
    
    <div class="bs-example pagination-centered">
        <ul class="pagination">

        <li><a href="/ci/index.php/select?page=<?php
        if($page < floor(($datatotal/$pages_row)))
        echo $page;
        else
         echo $page-1; ?>">
            上一頁</a></li>
            
        <?php for ($i=0; $i < $datatotal/$pages_row; $i++) { ?>
        <li><a href="/ci/index.php/select?page=<?php echo $i+1; ?> ">
        <?php echo $i+1; ?>
        </a></li>
        <?php } ?>
        <li><a href="/ci/index.php/select?page=
            <?php if($page > floor(($datatotal/$pages_row)))
                    echo $page;
                    else
                    echo $page+1; ?>">
            下一頁</a></li>    
    </ul>
    </div>




</body>
</html>