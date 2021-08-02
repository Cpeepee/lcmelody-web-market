<?php require ('./includes/the-security.php'); ?>
<?php include ('./includes/the-header.php');?>
<title>تیکت - ال سی ملودی</title>
<link rel="stylesheet" href="./assets/css/ticket.css">
<?php include ('./includes/the-close-head.php');?>
<?php include ('./includes/the-banner.php'); ?>

    <div id='main-layer'>
      <?php include('./includes/the-menu.php'); ?>
      <div id="base" class="def-border set-two-font">


        <section id="section-style">



          <?php
          //get id and check that
          $pid = $_GET['id'];
          $pid = (int)$pid;
          if(empty($_GET))
          {
            show_result("error","please enter product id!","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
          }



          //fetch customer information
          $sql_search = "SELECT p_brand,p_model,p_title,p_description,p_status,p_priority_TS,p_discount,p_summary_desc,p_type,p_price,p_amount FROM t_product WHERE p_id='$pid';";
          $result_search = $conn->query($sql_search);
          if ($result_search->num_rows > 0)
          {
            while($row = $result_search->fetch_assoc())
            {
                   $ptitle = $row['p_title'];
                   $pbrand = $row['p_brand'];
                   $pmodel = $row['p_model'];
                   $pdescription = $row['p_description'];
                   $pvisible = $row['p_status'];
                   $pprioirty = $row['p_priority_TS'];
                   $pdiscount = $row['p_discount'];
                   $ptechincal = $row['p_summary_desc'];
                   $pgroup = $row['p_type'];
                   $pprice = $row['p_price'];
                   $pamount = $row['p_amount'];
            }
          }
          else
          {
            $te = convert_error_2str($conn->error);
            show_result("error","Product (id=$pid) isn\'t exists error:$te","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
          }
          ?>




          <div id="base-ticket">
                  <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                    <h2 id="ticket-title">موضوع:
                    <span>من مشکل در ثبت و حذف سفارش در سایت دارم
                    من مشکل در ثبت و حذف سفارش در سایت دارم</span></h2>

                    <div id="ticket-info-base">
                      <h2 id="ticket-status-title">وضعیت : </h2>
                      <select id="ticket-status" class="bg-answered">
                        <option value="status-workingon">درحال رسیدگی</option>
                        <option value="status-waiting">در انتظار پاسخ</option>
                        <option value="status-answered">پاسخ داده شده</option>
                        <option value="status-closed">بسته شده</option>
                      </select>


                      <h2 id="ticket-date-time-style"><span>تاریخ</span> : <span>۳۱/۱۲/۱۴۰۰</span></h2>
                    </div>

                    <div class="message-style def-border">
                      <h2 class="message-sender">شما</h2>
                        <h2 class="message-text-style">this is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big textthis is big  big textthis is big textthis is big</h2>
                        <h2 class="message-appendix-title">ضمیمه ها</h2>
                        <h4><a class="message-appendixes-style cursor-pointer" href="www.sss.com">تصویر یک مورد نظر</a></h4>
                        <h4><a class="message-appendixes-style cursor-pointer" href="www.sss.com">www.domain.tld/directory/filename.format</a></h4>
                        <h4><a class="message-appendixes-style cursor-pointer" href="www.sss.com">www.domain.tld/directory/filename.format</a></h4>
                        <h4><a class="message-appendixes-style cursor-pointer" href="www.sss.com">www.domain.tld/directory/filename.format</a></h4>
                        <h2 class="message-date-style"><span>۱۲:۳۴:۳۰</span> - <span>۱۲/۱۲/۱۲۱۲</span></h2>
                    </div>

                <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                      <div id="base-your-response" class="def-border">
                        <h2 id="title-you-lable">شما</h2>
                        <textarea id="your-response-text" name="name" class="def-border" placeholder="پاسخ شما"></textarea>
                        <div id="base-buttons">
                          <div id="button-send" class="cursor-pointer unselectable">
                            <h2 id="button-send-text-style">ارسال</h2>
                          </div>
                          <div id="button-appendix" class="cursor-pointer unselectable">
                            <h2 id="button-appendix-text-style">افزودن فایل - ضمیمه</h2>
                          </div>
                        </div>
                    </div>


          </div>



        </section>


      </div>
    </div>


  </body>
</html>
