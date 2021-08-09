<?php require ('../includes/security.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
<title>تغییر کلمه عبور - ال سی ملودی</title>
<link rel="stylesheet" href="../assets/css/forget-email.css">
<?php include ('../includes/close-head.php');?>
    <div id='main-layer'>
      <br/>
      <center>
          <img src='../assets/img/banner/logo.png' alt='logo'/>
          <h1 class='set-the-font'>تغییر کلمه عبور</h1>
          <form action="./actions/a-change-password.php" method="post">
            <h3 class='set-the-font'>کلمه عبور جدید را وارد کنید</h3>
            <input id='password' class='text-inputs' type="password" name="password" placeholder="**************" autofocus dir='ltr'  maxlength="250">

            <h3 class='set-the-font'>تکرار کلمه عبور جدید را وارد کنید</h3>
            <input id='repassword' class='text-inputs' type="password" name="repassword" placeholder="**************" autofocus dir='ltr' maxlength="250">
            <br/><br/>

            <input class='buttons set-the-font' type="submit" name="login" value="تغییر کلمه عبور">
          </form>
        </center>
    </div>
  </body>
</html>
