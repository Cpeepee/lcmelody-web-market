<?php
    require "./actions/includes/header.php";
    include ('../includes/header.php');
?>
    <title>ویرایش اطلاعات حساب کاربری</title>
    <link rel="stylesheet" href="../assets/css/account.css">

<?php
    include ('../includes/close-head.php');
    include ('../includes/banner.php');
    include ('../includes/menu.php');
?>

    <div id="base-page">
        <?php
          include ("../includes/customer-menu.php");

          //fetch customer information
          $sql_search = "SELECT c_FL_name,c_phonenumer,c_email,c_address FROM t_customer WHERE c_id='$customerSessionId';";
          $result_search = $conn->query($sql_search);
          if ($result_search->num_rows > 0)
          {
            while($row = $result_search->fetch_assoc())
            {
                   $c_namefamily = $row['c_FL_name'];
                   $c_phonenumber = $row['c_phonenumer'];
                   $c_email = $row['c_email'];
                   $c_address = $row['c_address'];
            }
          }
          else
          {
            show_result("error","اطلاعات حساب کاربری دریافت نشد","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
          }


          //cut name from family
          $c_name = substr($c_namefamily, 0 ,strpos($c_namefamily," ")); //after first space customer name ends
          $c_family = substr($c_namefamily, strpos($c_namefamily," "));

        ?>

        <div id="base-account" class="def-border set-two-font">
          <h2 id="account-title" class="unselectable">ویرایش اطلاعات حساب کاربری</h2>
        <form action="./actions/a-edit-my-account.php" method="post">
          <div id="name-family-base" class="base-inputs-style">
              <div class="inputs-side-by-side-style">
                <h2 class="title-field unselectable">نام</h2>
                <br/><br/><br/>
                <input type="text" name="firstname" value="<?php echo $c_name;?>" class="inputs-style"  maxlength="20">
              </div>

              <div class="inputs-side-by-side-style">
                <h2 class="title-field unselectable">نام خانوادگی</h2>
                <input type="text" name="lastname" value="<?php echo $c_family;?>" class="inputs-style"  maxlength="40">
              </div>
          </div>


          <div id="phone-mail-base" class="base-inputs-style">
              <div class="inputs-side-by-side-style">
                <h2 class="title-field unselectable">شماره موبایل</h2>
                <br/><br/><br/>
                <input type="text" name="phonenumber" value="<?php echo $c_phonenumber;?>" class="inputs-style"  maxlength="15">
              </div>

              <div class="inputs-side-by-side-style">
                <h2 class="title-field unselectable">پست الکترونیکی</h2>
                <input type="text" name="email" value="<?php echo $c_email;?>" class="inputs-style" maxlength="60">
              </div>
          </div>

          <div id="address-base">
              <div id="address-centered">
                <h2 id="address-title" class="unselectable">آدرس</h2>
                <textarea id="address-text" name="address" maxlength="250"><?php echo $c_address;?></textarea>
              </div>
          </div>


            <div id="base-edits" class="unselectable">
              <div id="button-edit-password" class="button-style def-border cursor-pointer" onclick="window.location=('change-password.php');">
                <h2 class="button-text">ویرایش کلمه عبور</h2>
              </div>

              <div id="button-delete-account" class="button-style cursor-pointer def-border" onclick="window.location=('./actions/a-delete-my-account.php');">
                <h2 class="button-text">حذف حساب کاربری</h2>
              </div>
            </div>

            <div id="base-button-save">
              <input id="button-save" class="button-style cursor-pointer unselectable def-border" type="submit" value="ثبت تغییرات">
            </div>
        </form>
          <br/>

        </div>
      </div>

      </div>

    </body>
</html>

<?php require "./includes/footer.php";
require './actions/includes/footer.php';?>
