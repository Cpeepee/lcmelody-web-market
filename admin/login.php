<?php include ('./includes/the-header.php');?>
<title>ورود مدیر - ال سی ملودی</title>
<link rel="stylesheet" href="./assets/css/login.css">
<?php include ('./includes/the-close-head.php');?>
<?php include ('./includes/the-banner.php'); ?>

    <div id='main-layer'>
      <center>
          <h1 class='set-the-font'>ورود به حساب</h1>
          <form action="./actions/a-login.php" method="post">

            <h3 class='set-the-font'>پست الکترونیک خود را وارد کنید</h3>
            <input id='email' class='text-inputs' type="text" name="email" placeholder="the@example.com" autofocus dir="ltr">

            <h3 class='set-the-font'>کلمه عبور خود را وارد کنید</h3>
            <input id='password-a' class='text-inputs' type="password" name="password-a" placeholder="************" dir="ltr">

            <h3 class='set-the-font'>کلمه عبور خود را وارد کنید</h3>
            <input id='password-b' class='text-inputs' type="password" name="password-b" placeholder="************" dir="ltr">

            <h3 class='set-the-font'>کلمه عبور خود را وارد کنید</h3>
            <input id='password-c' class='text-inputs' type="password" name="password-c" placeholder="************" dir="ltr">

            <br/><br/>

            <input class='buttons set-the-font' type="submit" name="login" value="ورود">
          </form>

              <br/>
        </center>
    </div>
  </body>
</html>
