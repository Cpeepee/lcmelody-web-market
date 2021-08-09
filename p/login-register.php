<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

<title>حساب کاربری - ال سی ملودی</title>
<link rel="stylesheet" href="../assets/css/login-register.css">
<?php include ('../includes/close-head.php');?>
    <div id='main-layer' class="unselectable">
      <br/>
        <center>
          <img src='../assets/img/banner/logo.png' alt='logo' draggable="false"/>
          <h1 class='set-the-font'>حساب کاربری</h1>
        </center>

        <section class="set-the-font">
            <div id="login" class="button-style cursor-pointer" onclick="window.location=('./login/index.php');">
                <div class="icon-box-style">
                  <img class="icon-style" src="../assets/img/icons/login-account-100.png" alt="login-icon" draggable="false"/>
                </div>
                <h1>ورود به حساب</h1>
            </div>

            <div id="create" class="button-style cursor-pointer" onclick="window.location=('./register/index.php');">
                <div class="icon-box-style">
                  <img class="icon-style" src="../assets/img/icons/create-account-100.png" alt="register-icon" draggable="false"/>
                </div>
                  <h1>ایجاد حساب</h1>
            </div>
        </section>

    </div>
  </body>
</html>
