<?php
    require ('../includes/security.php');
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
                </div>

        <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
            </div>
        <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
        </div>
        <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->






    </div>
  <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
  </body>
</html>
