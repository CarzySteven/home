
<!DOCTYPE html>
<?php
  if(!empty($_POST)){
    print_r($_POST);
  }
?>
<html>
    <body>
<?php
    if(isset($_COOKIE["ItemName"])){
        $ItemName=$_COOKIE["ItemName"];
        $quantiy =$_COOKIE("Quantity");
        print "取得 ItemName 的Cookie 值：".$ItemName."<br>";
        print "取得 Quantity 的Cookie 值:" .$quantity."<br>";
        setcookie("ItemName","",time()-3600);
        setcookie("Quantity","",time()-3600);
    }
    else{
        $data= strtotime("+10 days", time() );
        // setcookie("TestCookie",$ItemName, time()+3600*24);
        // setcookie("ItemName", $ItemName, $data);
        // setcookie("Quantity", $quantity, $data);

        // print "新增名為 ItemName 的Cookie:".$ItemName."<br>";
        // print "新增名為 Quantity 的Cookie:".$quantity."<br>";
        // print "Cookie 期限:".data("1 F j Y h:i:s A", $data);
    }
?>
    <br> <a href="http://localhost/ci/index.php/main">取得Cookie</a>



<?php
setcookie("cookie[three]","cookiethree");
setcookie("cookie[two]","cookietwo");
setcookie("cookie[one]","cookieone");

// 输出 cookie （在重载页面后）
if (isset($_COOKIE["cookie"]))
  {
  foreach ($_COOKIE["cookie"] as $name => $value)
    {
    echo "$name : $value <br />";
    }
  }
?>




    </body>
</html>