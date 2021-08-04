<?php require './actions/includes/header.php';?>
<?php include ('./includes/the-header.php');?>
<title>ویرایش مشتری  - ال سی ملودی</title>
<link rel="stylesheet" href="./assets/css/edit-customer.css">
<?php include ('./includes/the-close-head.php');?>
<?php include ('./includes/the-banner.php'); ?>

    <div id='main-layer'>
      <?php include('./includes/the-menu.php'); ?>
      <div id="base-banner-edit" class="def-border set-two-font">


        <?php
        //get id and check that
        $c_id = $_GET['id'];
        $c_id = (int)$c_id;
        if(empty($_GET))
        {
          show_result("error","please enter customer id!","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
        }



        //fetch customer information
        $sql_search = "SELECT c_FL_name,c_password,c_phonenumer,c_email,c_attempts_TL,c_address,c_registration FROM t_customer WHERE c_id='$c_id';";
        $result_search = $conn->query($sql_search);
        if ($result_search->num_rows > 0)
        {
          while($row = $result_search->fetch_assoc())
          {
                 $c_name_family = $row['c_FL_name'];
                 $c_password = $row['c_password'];
                 $c_phone = $row['c_phonenumer'];
                 $c_email = $row['c_email'];
                 $c_attempts = $row['c_attempts_TL'];
                 $c_address = $row['c_address'];
                 $c_registeration_date = $row['c_registration'];
          }
        }
        else
        {
          $te = convert_error_2str($conn->error);
          show_result("error","Customer (id=$c_id) isn\'t exists error: $te","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
        }


        //cut name from family
        $c_name = substr($c_name_family, 0 ,strpos($c_name_family," ")); //after first space customer name ends
        $c_family = substr($c_name_family, strpos($c_name_family," "));


        ?>

        <section id="parrent-section-style">
              <div id="buttons-divider">
                <form action="./actions/a-edit-customer.php" method="post">
                    <section id="right-side" class="sides-style">

                      <div class="divider-inputs">
                        <h2 class="labels-style">شناسه کاربر</h2>
                        <input class="inputs-style" type="text" value="<?php echo $c_id;?>" name="id" style="margin-top:-50px;direction:ltr;" maxlength="4" readonly>
                      </div>

                      <div class="divider-inputs">
                        <h2 class="labels-style floatright">نام</h2>
                        <input id="user-name" class="inputs-style" type="text" value="<?php echo $c_name;?>" name="name" maxlength="20">
                      </div>
                      <br/>
                      <div class="divider-inputs">
                         <h2 class="labels-style floatright">نام خانوادگی</h2>
                         <input id="user-family" class="inputs-style" type="text" value="<?php echo $c_family;?>" name="family" maxlength="40">
                      </div>
                      <br/>
                      <div class="divider-inputs">
                         <h2 class="labels-style floatright">کلمه عبور</h2>
                         <input id="user-password" class="inputs-style dirltr" type="text" value="<?php echo $c_password;?>" name="password" maxlength="">
                      </div>
                      <br/>
                      <div class="divider-inputs">
                         <h2 class="labels-style floatright">تلاش به ورود</h2>
                         <input id="user-attemps" class="inputs-style dirltr" type="text" value="<?php echo $c_attempts;?>" name="attempts" maxlength="1">
                      </div>
                    </section>


                    <section id="left-side" class="sides-style">
                      <h2 class="labels-style">تاریخ ثبت نام<span id="user-register" class="second-label-style"><?php echo $c_registeration_date;?></span></h2>
                      <div class="divider-inputs">
                        <h2 class="labels-style floatright">شماره موبایل</h2>
                        <input id="user-phonenumber" class="inputs-style dirltr" type="text" value="<?php echo $c_phone;?>" name="phone" maxlength="15">
                      </div>
                      <br/>
                      <div class="divider-inputs">
                         <h2 class="labels-style floatright">پست الکترونیک</h2>
                         <input id="user-email" class="inputs-style dirltr" type="text" value="<?php echo $c_email;?>" name="email" maxlength="60">
                      </div>
                      <br/>
                      <div class="divider-inputs">
                         <h2 class="labels-style floatright">آدرس</h2>
                         <textarea id="user-address" name="address" maxlength="250"><?php echo $c_address;?></textarea>
                      </div>
                    </section>
                </div>
          <br/>
          <h3></h3>
          <div id="buttons-base">
            <input id="button-save-account-edits" class="button-style cursor-pointer" type="submit" value="ذخیره تغییرات"></input>
          </form>
            <button id="button-delete-account" class="button-style cursor-pointer" type="button" onclick="window.open('./actions/a-delete-user.php?mode=customer&id=<?php echo $c_id;?>');">حذف حساب</button>
          </div>

        </section>


      </div>
    </div>


  </body>
</html>
<?php require './actions/includes/footer.php';?>
