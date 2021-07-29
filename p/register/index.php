<?php require ('../../includes/security.php'); ?>
<title>ایجاد حساب - ال سی ملودی</title>
<link rel="stylesheet" href="../../assets/css/register.css">
<?php include ('../../includes/close-head.php');?>
    <div id='main-layer'>
      <br/>
      <center>
          <img src='../../assets/img/banner/logo.png' alt='logo'/>
          <h1 class='set-the-font'>ورود به حساب</h1>

            <h3 class='set-the-font lessSpaceWithBotton' style='margin-right: -285px;'>نام و نام خانوادگی</h3>
            <input id='nameAndFamily' class='text-inputs' type="text" name="nameAndFamily" placeholder="محمد محمدی" autofocus autocomplete="off" dir="rtl">

            <h3 class='set-the-font lessSpaceWithBotton' style='margin-right: -311px;'>شماره موبایل</h3>
            <input id='phoneNumber' class='text-inputs' type="text" name="phoneNumber" placeholder="09170000000">

            <h3 class='set-the-font lessSpaceWithBotton' style='margin-right: -300px;'>پست الکترونیک</h3>
            <input id='email' class='text-inputs' type="email" name="email" placeholder="the@example.com" dir="ltr">

            <h3 class='set-the-font lessSpaceWithBotton' style='margin-right: -265px;'>تکرار پست الکترونیک</h3>
            <input id='reEmail' class='text-inputs' type="email" name="reEmail" placeholder="the@example.com" autocomplete="off">

            <h3 class='set-the-font lessSpaceWithBotton' style='margin-right: -355px;'>آدرس</h3>
            <input id='address' class='text-inputs' type="text" name="address" placeholder="تهران - خیابان ولیعصر - کوچه ۶ - پلاک ۱۴۵ - کدپستی ۷۴۸۳۲۹۷۴۲" dir='rtl'>

            <h3 class='set-the-font lessSpaceWithBotton' style='margin-right: -335px;'>کلمه عبور</h3>
            <input id='password' class='text-inputs' type="text" name="password" placeholder="*****************" autocomplete="off" dir="ltr">

            <h3 class='set-the-font lessSpaceWithBotton' style='margin-right: -300px;'>تکرار کلمه عبور</h3>
            <input id='rePassword' class='text-inputs' type="text" name="rePassword" placeholder="*****************" autocomplete="off" dir="ltr">

            <br/>
            <br/>
            <input class='buttons set-the-font' style="height:30px;font-size:20px;" type="button" name="showTermAndRules" value="نمایش شرایط و قوانین" onclick="window.open('../term-and-rules/index.php');">

            <br/>
            <label class="set-the-font" style="font-size:18px;" for="iAcceptTermAndRules">شرایط و قوانین را خوانده ام و آن را می پذیرم</label>
            <input id="iAcceptTermAndRules" type="checkbox" name="iAcceptTermAndRules">

            <br/>
            <br/>
            <input class='buttons set-the-font' type="button" name="createAccount" value="ایجاد حساب" onclick="">
        </center>
    </div>
  </body>
</html>
