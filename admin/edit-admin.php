<?php require './actions/includes/header.php';
include ('./includes/the-header.php');?>
<title>ویرایش مدیر  - ال سی ملودی</title>
<link rel="stylesheet" href="./assets/css/edit-admin.css">
<?php include ('./includes/the-close-head.php');
include ('./includes/the-banner.php'); ?>


    <div id='main-layer'>
      <?php include('./includes/the-menu.php'); ?>
      <div id="base-banner-edit" class="def-border set-two-font">

        <?php
        //get id and check that
        $id = $_GET['id'];
        $id = (int)$id;
        if (empty($_GET))
        {
          show_result("error","please enter admin id!","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
        }

        //fetch admin info
        $sql_search = "SELECT a_email,a_attempts_TL,a_first_pass,a_second_pass,a_third_pass FROM t_admin WHERE a_id=$id;";
        $result_search = $conn->query($sql_search);
        if ($result_search->num_rows > 0)
        {
          while($row = $result_search->fetch_assoc())
          {

                 $adminmail = $row['a_email'];
                 $adminattempts = $row['a_attempts_TL'];
                 $adminpass1 = $row['a_first_pass'];
                 $adminpass2 = $row['a_second_pass'];
                 $adminpass3 = $row['a_third_pass'];
          }
        }
        else
        {
          $te = convert_error_2str($conn->error);
          show_result("error","Admin (id=$id) isn\'t exists error: $te","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
        }

        ?>
        <h1 style="margin-right:20px;">ویرایش مدیر</h1>
        <section id="parrent-section-style">
              <div id="buttons-divider">
                <form action="./actions/a-edit-admin.php" method="post">
                    <section id="right-side" class="sides-style">
                      <div class="divider-inputs">
                         <h2 class="labels-style floatright">شناسه</h2>
                         <input id="user-email" class="inputs-style dirltr" type="text" value="<?php echo $id;?>" name="id" disabled>
                      </div>


                      <br/>
                      <div class="divider-inputs">
                         <h2 class="labels-style floatright">پست الکترونیک</h2>
                         <input id="user-email" class="inputs-style dirltr" type="text" value="<?php echo $adminmail;?>" name="email">
                      </div>
                      <br/>
                      <div class="divider-inputs">
                         <h2 class="labels-style floatright">تلاش به ورود</h2>
                         <input id="user-attemps" class="inputs-style dirltr" type="text" value="<?php echo $adminattempts;?>" name="attempts">
                      </div>
                    </section>




                    <section id="left-side" class="sides-style">
                      <br/>
                      <div class="divider-inputs">
                         <h2 class="labels-style floatright">کلمه عبور یک</h2>
                         <input id="user-family" class="inputs-style dirltr" type="text" value="<?php echo $adminpass1;?>" name="password-1">
                      </div>
                      <br/>
                      <div class="divider-inputs">
                         <h2 class="labels-style floatright">کلمه عبور دو</h2>
                         <input id="user-password" class="inputs-style dirltr" type="text" value="<?php echo $adminpass2;?>" name="password-2">
                      </div>
                      <br/>
                      <div class="divider-inputs">
                        <h2 class="labels-style floatright">کلمه عبور سه</h2>
                        <input id="user-phonenumber" class="inputs-style dirltr" type="text" value="<?php echo $adminpass3;?>" name="password-3">
                      </div>

                    </section>
                </div>
          <br/>
          <h3></h3>
          <div id="buttons-base">
            <input id="button-save-account-edits" class="button-style cursor-pointer" type="submit" value="ذخیره تغییرات"></input>
            </form>
            <button id="button-delete-account" class="button-style cursor-pointer" type="button" onclick="window.open('./actions/a-delete-user.php?mode=admin&id=<?php echo $id;?>');">حذف حساب</button>
          </div>

        </section>


      </div>
    </div>


  </body>
</html>
<?php require './actions/includes/footer.php';?>
