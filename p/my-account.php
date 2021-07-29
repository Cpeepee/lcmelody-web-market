<?php
    require ('../includes/security.php');
    include ('../includes/header.php');
?>
    <title>ویرایش اطلاعات حساب کاربری</title>
    <link rel="stylesheet" href="../assets/css/account.css">

<?php
    include ('../includes/close-head.php');
    include ('../includes/banner.php');
    include ('../includes/menu.php');
?>

<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <div id="base-page">
        <?php
          include ("../includes/customer-menu.php");
        ?>

        <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
        <div id="base-account" class="def-border set-two-font">
          <h2 id="account-title" class="unselectable">ویرایش اطلاعات حساب کاربری</h2>

          <div id="name-family-base" class="base-inputs-style">
              <div class="inputs-side-by-side-style">
                <h2 class="title-field unselectable">نام</h2>
                <br/><br/><br/>
                <input type="text" name="first-name" value="محمد" class="inputs-style">
              </div>

              <div class="inputs-side-by-side-style">
                <h2 class="title-field unselectable">نام خانوادگی</h2>
                <input type="text" name="last-name" value="محمدی" class="inputs-style">
              </div>
          </div>


          <div id="phone-mail-base" class="base-inputs-style">
              <div class="inputs-side-by-side-style">
                <h2 class="title-field unselectable">شماره موبایل</h2>
                <br/><br/><br/>
                <input type="text" name="phonenumber" value="09171474747" class="inputs-style">
              </div>

              <div class="inputs-side-by-side-style">
                <h2 class="title-field unselectable">پست الکترونیکی</h2>
                <input type="text" name="email" value="info@lcmelody.ir" class="inputs-style">
              </div>
          </div>


          <div id="address-base">
              <div id="address-centered">
                <h2 id="address-title" class="unselectable">آدرس</h2>
                <textarea id="address-text" name="address"></textarea>
              </div>
          </div>


            <div id="base-edits" class="unselectable">
              <div id="button-edit-password" class="button-style def-border cursor-pointer">
                <h2 class="button-text">ویرایش کلمه عبور</h2>
              </div>

              <div id="button-delete-account" class="button-style cursor-pointer def-border">
                <h2 class="button-text">حذف حساب کاربری</h2>
              </div>
            </div>

          <div id="button-save" class="button-style cursor-pointer unselectable def-border">
            <h2 class="button-text">ثبت تغییرات</h2>
          </div>
          <br/>

        </div>
      </div>
      <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
      </div>
      <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    </body>
</html>
