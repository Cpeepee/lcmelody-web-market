<?php require ('./includes/the-security.php'); ?>
<?php include ('./includes/the-header.php');?>
<title>ویرایش مشتری  - ال سی ملودی</title>
<link rel="stylesheet" href="./assets/css/edit-customer.css">
<?php include ('./includes/the-close-head.php');?>
<?php include ('./includes/the-banner.php'); ?>

    <div id='main-layer'>
      <?php include('./includes/the-menu.php'); ?>
      <div id="base-banner-edit" class="def-border set-two-font">

        <section id="parrent-section-style">
              <div id="buttons-divider">
                <form action="./actions/a-edit-customer.php" method="post">
                    <section id="right-side" class="sides-style">
                      <h2 class="labels-style">شناسه کاربر<span id="user-id" class="second-label-style">۱۲۳۴</span></h2>
                      <div class="divider-inputs">
                        <h2 class="labels-style floatright">نام</h2>
                        <input id="user-name" class="inputs-style" type="text" value="محمد رضااکبر">
                      </div>
                      <br/>
                      <div class="divider-inputs">
                         <h2 class="labels-style floatright">نام خانوادگی</h2>
                         <input id="user-family" class="inputs-style" type="text" value="رضایی رضازاده ای">
                      </div>
                      <br/>
                      <div class="divider-inputs">
                         <h2 class="labels-style floatright">کلمه عبور</h2>
                         <input id="user-password" class="inputs-style dirltr" type="text" value="ABc263+$#@kmoifewH%$IKO34">
                      </div>
                      <br/>
                      <div class="divider-inputs">
                         <h2 class="labels-style floatright">تلاش به ورود</h2>
                         <input id="user-attemps" class="inputs-style dirltr" type="text" value="5">
                      </div>
                    </section>




                    <section id="left-side" class="sides-style">
                      <h2 class="labels-style">تاریخ ثبت نام<span id="user-register" class="second-label-style">۱۴۰۰/۱۲/۴</span></h2>
                      <div class="divider-inputs">
                        <h2 class="labels-style floatright">شماره موبایل</h2>
                        <input id="user-phonenumber" class="inputs-style dirltr" type="text" value="09170000000">
                      </div>
                      <br/>
                      <div class="divider-inputs">
                         <h2 class="labels-style floatright">پست الکترونیک</h2>
                         <input id="user-email" class="inputs-style dirltr" type="text" value="some@some.some">
                      </div>
                      <br/>
                      <div class="divider-inputs">
                         <h2 class="labels-style floatright">آدرس</h2>
                         <textarea id="user-address" >Sq some St where LM where</textarea>
                      </div>
                    </section>
                </div>
          <br/>
          <h3></h3>
          <div id="buttons-base">
            <input id="button-save-account-edits" class="button-style cursor-pointer" type="submit" value="ذخیره تغییرات"></input>
          </form>
            <button id="button-delete-account" class="button-style cursor-pointer" type="button" onclick="window.open('./actions/a-delete-user.php?mode=customer&id=<?php echo $id;?>');">حذف حساب</button>
          </div>

        </section>


      </div>
    </div>


  </body>
</html>
