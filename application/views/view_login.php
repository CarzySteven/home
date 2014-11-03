<!DOCTYPE html>


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
        max-width: 300px;
        padding: 19px 29px 29px;
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
      
    <script type="text/javascript">
      function datanonEmpty(inputField, helpText , idcow) {
        // See if the input value contains any text
        if (inputField.value.length == 0) {
          // The data is invalid, so set the help message
          if (helpText != null)
            helpText.innerHTML = '<font color="red">'+"<br>請輸入"+idcow;
            
          return false;
        }
        else {
          // The data is OK, so clear the help message
          if (helpText != null)
            helpText.innerHTML = "";
          return true;
        }
      } 
    </script>
    <div class="container">

        
            <form class="form-signin" action="/ci/index.php/login" method="POST">
            <h2 class="form-signin-heading">Please sign in</h2>
            
            <div class="control-group">
            <div class="controls">
                <label class="control-label" for="inputEmail">帳號</label>
                <input type="text" id="username" placeholder="帳號" name="id" 
                onBlur="datanonEmpty(this,document.getElementById('id_help'),document.getElementById('username').placeholder);" />
                <span id="id_help" class="help"></span>
            </div>
        </div>

        <div class="control-group">
            <div class="controls">
                <label class="control-label" for="inputEmail">密碼</label>
                <input type="text" id="password" placeholder="密碼" 
                name="psw" onBlur="datanonEmpty(this,document.getElementById('psw_help'),document.getElementById('password').placeholder);" />
                <span id="psw_help" class="help"></span>
            </div>
        </div>



            <button class="btn btn-large btn-primary" type="submit" name="Reg">Sign in</button>

            <a class="btn btn-large btn-success" href="/ci/index.php/register">Register</a> 

        </form>


</body>
</html>


</body>

</html>