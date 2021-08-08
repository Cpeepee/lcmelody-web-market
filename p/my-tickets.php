<?php
    require "./actions/includes/header.php";
    include ('../includes/header.php');
?>
    <title>تیکت</title>
    <link rel="stylesheet" href="../assets/css/tickets.css">

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

        <div id="base-tickets" class="def-border set-two-font">
          <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
            <h1 id="base-ticket-title">تیکت ها</h1>
            <div id="add-new-ticket" class="def-border cursor-pointer unselectable"   onclick="window.location.href='send-ticket.php'">
              <div id="centered-add-new-ticket">
                <h1 id="plus-symbol">+</h1>
                <h2 id="text-add-new">ایجاد تیکت جدید</h2>
              </div>
            </div>


            <div id="tickets" class="def-border set-the-font">






              <?php
              //fetch tickets info
              $sql_search = "SELECT t_id,t_subject,t_status,t_date FROM t_ticket WHERE `t_email`='$customerSessionId' ORDER BY t_status DESC;";
              $result_search = $conn->query($sql_search);
              if ($result_search->num_rows > 0)
              {
                while($row = $result_search->fetch_assoc())
                {
                  ?>
                  <div class="ticket-style unselectable cursor-pointer" onclick="window.open('ticket.php?id=<?php echo $row['t_id'];?>');">
                    <div class="ticket-right-side-style">
                      <?php
                        //status convert
                        $status_text;
                        $status_color_mode;
                        switch ($row['t_status'])
                        {
                          case 0:
                          {
                              $status_text = "بسته شده";
                              $status_color_mode = "closed";
                          }break;

                          case 1:
                          {
                              $status_text = "پاسخ داده شده";
                              $status_color_mode = "answered";
                          }break;

                          case 2:
                          {
                              $status_text = "درحال رسیدگی";
                              $status_color_mode = "workingon";
                          }break;

                          default:
                          {
                            $status_text = "در انتظار پاسخ";
                            $status_color_mode = "waiting";
                          }break;
                        }
                      ?>
                      <div class="ticket-status-style bg-<?php echo $status_color_mode;?>"> <!--  bg-  0-closed  1-answered  2=workingon 3=waiting  -->
                        <h2><?php echo $status_text;?></h2>
                      </div>
                      <h2 class="ticket-text-style"><?php echo $row['t_subject'];?></h2>
                    </div>
                    <p class="ticket-date-style"><span>تاریخ</span> : <span><?php echo $row['t_date'];?></span></p>
                  </div>
                  <?php

                }
              }
              else
              {
                ?>
                <center><h2>ticket not found</h2></center>
                <?php
                // show_result("error","خطا در دریافت اطلاعات تیکت","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
              }
              ?>


<!--
                <div class="ticket-style unselectable cursor-pointer"   onclick="window.location.href='ticket.php'">
                  <div class="ticket-right-side-style">
                    <div class="ticket-status-style bg-answered">
                      <h2>پاسخ داده شده</h2>
                    </div>
                    <h2 class="ticket-text-style">من مشکل در ثبت و حذف سفارش در سایت دارم کمک کنید لطفا اگه کمک نکنید
                    دیگه از سایت شما استفاده </h2>
                  </div>
                  <p class="ticket-date-style"><span>تاریخ</span> : <span>۲۹/۱۲/۱۴۰۰</span></p>
                </div>


                <div class="ticket-style unselectable cursor-pointer">
                  <div class="ticket-right-side-style">
                    <div class="ticket-status-style bg-waiting">
                      <h2>در انتظار پاسخ</h2>
                    </div>
                    <h2 class="ticket-text-style">من مشکل در ثبت و حذف سفارش در سایت دارم کمک کنید لطفا اگه کمک نکنید
                    دیگه از سایت شما استفاده </h2>
                  </div>
                  <p class="ticket-date-style"><span>تاریخ</span> : <span>۲۹/۱۲/۱۴۰۰</span></p>
                </div>


                <div class="ticket-style unselectable cursor-pointer">
                  <div class="ticket-right-side-style">
                    <div class="ticket-status-style bg-closed">
                      <h2>بسته شده</h2>
                    </div>
                    <h2 class="ticket-text-style">من مشکل در ثبت و حذف سفارش در سایت دارم کمک کنید لطفا اگه کمک نکنید
                    دیگه از سایت شما استفاده </h2>
                  </div>
                  <p class="ticket-date-style"><span>تاریخ</span> : <span>۲۹/۱۲/۱۴۰۰</span></p>
                </div>

                <div class="ticket-style unselectable cursor-pointer">
                  <div class="ticket-right-side-style">
                    <div class="ticket-status-style bg-workingon">
                      <h2>درحال رسیدگی</h2>
                    </div>
                    <h2 class="ticket-text-style">من مشکل در ثبت و حذف سفارش در سایت دارم کمک کنید لطفا اگه کمک نکنید
                    دیگه از سایت شما استفاده </h2>
                  </div>
                  <p class="ticket-date-style"><span>تاریخ</span> : <span>۲۹/۱۲/۱۴۰۰</span></p>
                </div> -->

        <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
            </div>
        <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
        </div>
        <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->






    </div>
  <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
  </body>
</html>
<?php require "./includes/footer.php";?>
