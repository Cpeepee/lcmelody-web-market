<title>فراموشی پست الکترونیک - ال سی ملودی</title>
<link rel="stylesheet" href="../../assets/css/forget-email.css">
<?php include ('../../includes/close-head.php');?>
    <div id='main-layer'>
      <br/>
      <center>
          <img src='../../assets/img/banner/logo.png' alt='logo'/>
          <h1 class='set-the-font'>فراموشی پست الکترونیک</h1>
          <form action="../actions/a-forget-email.php" method="post">
            <h3 class='set-the-font'>نام و نام خانوادگی خود را وارد کنید</h3>
            <input id='email' class='text-inputs' type="text" name="nameAndFamily" placeholder="محمد محمدی" autofocus dir='rtl'>

            <h3 class='set-the-font'>شماره موبایل خود را وارد کنید</h3>
            <input id='password' class='text-inputs' type="text" name="phoneNumber" placeholder="09170000000">

            <br/><br/>

            <input class='buttons set-the-font' type="submit" name="login" value="بازیابی پست الکترونیک">
          </form>
        </center>
    </div>
  </body>
</html>
