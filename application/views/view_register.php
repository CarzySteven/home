

<!DOCTYPE html>
<?php
  if(!empty($_POST)){
    print_r($_POST);
  }
?>

<head>
	<meta charset="UTF-8">
	<title>Register</title>
    <link rel="stylesheet" href="///maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" type="text/css" />
</head>	

<body>
		
	    <form class="bs-docs-example form-horizontal" 
    action="/ci/index.php/checkitem" method="POST">

        <div class="control-group">
            <label class="control-label" for="inputEmail">姓名</label>
            <div class="controls">
                <input type="text" id="inputEmail" placeholder="姓名" 
                name="username">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="inputEmail">生日</label>
            <div class="controls">
                <input type="text" id="inputtext" placeholder="生日"
                name="birth">
            </div>
        </div>


        <div class="control-group">
            <label class="control-label" for="inputEmail">信箱</label>
            <div class="controls">
                <input type="text" id="inputtext" placeholder="信箱"
                name="email">
            </div>
        </div>


        <div class="control-group">
            <label class="control-label" for="inputEmail">帳號</label>
            <div class="controls">
                <input type="text" id="inputtext" placeholder="帳號"
                name="id">
            </div>
        </div>


        <div class="control-group">
            <label class="control-label" for="inputtext">密碼</label>
            <div class="controls">
                <input type="password" id="inputtext" placeholder="密碼"
                name="psw">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="inputEmail">電話</label>
            <div class="controls">
                <input type="text" id="inputtext" placeholder="電話"
                name="phone">
            </div>
        </div>


        <div class="control-group">
            <label class="control-label" for="inputEmail">卡號</label>
            <div class="controls">
                <input type="text" id="inputtext" placeholder="卡號"
                name="carnumber">
            </div>
        </div>




        <div class="control-group">
            <div class="controls">
                <label class="checkbox">
                    <input type="checkbox">記住我
                </label>
                <button type="submit" class="btn">送出</button>
            </div>
        </div>
    </form>

</body>
</html>