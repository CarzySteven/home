<!DOCTYPE html>
<?php
  if(!empty($_POST)){
    print_r($_POST);
  }
?>
<head>
    <meta charset="UTF-8">
    <title>Fire.app Demo</title>
    <link rel="stylesheet" href="///maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" type="text/css" />
</head>

</head>

<body>
    <form class="bs-docs-example form-horizontal" 
    action="/ci/index.php/login" method="POST">
        <div class="control-group">
            <label class="control-label" for="inputEmail">帳號</label>
            <div class="controls">
                <input type="text" id="inputEmail" placeholder="帳號" 
                name="account">
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
            </div>
        </div>
    </form>

</body>

</html>