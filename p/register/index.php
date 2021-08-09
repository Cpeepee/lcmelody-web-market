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
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
<title>ایجاد حساب - ال سی ملودی</title>
<link rel="stylesheet" href="../../assets/css/register.css">
<?php include ('../../includes/close-head.php');?>
    <div id='main-layer'>
      <br/>
      <center>
          <img src='../../assets/img/banner/logo.png' alt='logo'/>
          <h1 class='set-the-font'>ایجاد حساب</h1>
          <form action="../actions/a-register.php" method="post">
            <h3 class='set-the-font lessSpaceWithBotton' style='margin-right: -285px;'>نام و نام خانوادگی</h3>
            <input id='nameAndFamily' class='text-inputs' type="text" name="nameAndFamily" placeholder="محمد محمدی" autofocus autocomplete="off" dir="rtl"  maxlength="60">

            <h3 class='set-the-font lessSpaceWithBotton' style='margin-right: -311px;'>شماره موبایل</h3>
            <input id='phoneNumber' class='text-inputs' type="text" name="phoneNumber" placeholder="09123456789"  maxlength="15">

            <h3 class='set-the-font lessSpaceWithBotton' style='margin-right: -300px;'>پست الکترونیک</h3>
            <input id='email' class='text-inputs' type="email" name="email" placeholder="the@example.com" dir="ltr"  maxlength="60">

            <h3 class='set-the-font lessSpaceWithBotton' style='margin-right: -355px;'>آدرس</h3>
            <input id='address' class='text-inputs' type="text" name="address" placeholder="تهران - خیابان ولیعصر - کوچه ۶ - پلاک ۱۴۵ - کدپستی ۷۴۸۳۲۹۷۴۲" dir='rtl'  maxlength="250">

            <h3 class='set-the-font lessSpaceWithBotton' style='margin-right: -335px;'>کلمه عبور</h3>
            <input id='password' class='text-inputs' type="password" name="password" placeholder="*****************" autocomplete="off" dir="ltr"  maxlength="250">

            <br/>
            <br/>
            <input class='buttons set-the-font' style="height:30px;font-size:20px;" type="button" name="showTermAndRules" value="نمایش شرایط و قوانین" onclick="window.open('../term-rules.php');">

            <br/>

            <input class='buttons set-the-font' type="submit" name="createAccount" value="ایجاد حساب">
          </form>
        </center>
    </div>
  </body>
</html>
