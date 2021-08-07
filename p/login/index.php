<?php

session_start();
if(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true)
{
  if(isset($_SESSION["s_customer_id"]))
  {
    ?><script> window.location = "../client-area.php"; </script><?php
  }
}
?>

<title>ورود به حساب - ال سی ملودی</title>
<link rel="stylesheet" href="../../assets/css/login.css">
<?php include ('../../includes/close-head.php');?>
    <div id='main-layer'>
      <br/>
      <center>
          <img src='../../assets/img/banner/logo.png' alt='logo'  onclick="window.location.href='../'"/>
          <h1 class='set-the-font'>ورود به حساب</h1>

          <form action="../actions/a-login.php" method="post">
            <h3 class='set-the-font'>پست الکترونیک خود را وارد کنید</h3>
            <input id='email' class='text-inputs' type="text" name="email" placeholder="the@example.com" autofocus dir="ltr">

            <h3 class='set-the-font'>کلمه عبور خود را وارد کنید</h3>
            <input id='password' class='text-inputs' type="password" name="password" placeholder="************" dir="ltr">

            <br/><br/>

            <input class='buttons set-the-font' type="submit" name="login" value="ورود">
          </form>
            <input class='buttons set-the-font' type="button" name="forgetpass" value="پست الکترونیک را فراموش کردم" onclick="window.location.href='../forget-email/index.php'">
              <br/>
            <input class='buttons set-the-font' type="button" name="forgetmail" value="کلمه عبور را فراموش کردم" onclick="window.location.href='../forget-password.php'">
        </center>
    </div>

x`

  </body>
</html>
