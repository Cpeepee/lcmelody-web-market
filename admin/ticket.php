<?php require './actions/includes/header.php';?>
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
          $id = $_GET['id'];
          if ($id== "")
          {
            show_result("error","لطفا مقادیر معتبر را وارد کنید","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
          }

          $id = (int)$id;

          ?>
          <div id="base-ticket">
          <?php
          //fetch ticket info
          $ticket_owner;
          $sql_search = "SELECT t_subject,t_status,t_date,t_main_text,t_email FROM t_ticket WHERE t_id='$id';";
          $result_search = $conn->query($sql_search);
          if ($result_search->num_rows > 0)
          {
            while($row = $result_search->fetch_assoc())
            {
              $ticket_owner = $row['t_email'];
              ?>
              <h2 id="ticket-title">موضوع:
              <span><?php echo $row['t_subject'];?></span></h2>
              <div id="ticket-info-base">
                <h2 id="ticket-status-title">وضعیت : </h2>
              <?php
              //status convert
              $status_color_mode;
              switch ($row['t_status'])
              {
                case 0:
                {
                    ?>
                    <select id="ticket-status" class="bg-closed" onchange="changeStatusTicket(0)">
                      <option value="3">در انتظار پاسخ</option>
                      <option value="2">درحال رسیدگی</option>
                      <option value="1">پاسخ داده شده</option>
                      <option value="0" selected>بسته شده</option>
                    </select>
                    <?php
                }break;

                case 1:
                {
                    ?>
                    <select id="ticket-status" class="bg-answered" onchange="changeStatusTicket(1)">
                      <option value="3">در انتظار پاسخ</option>
                      <option value="2">درحال رسیدگی</option>
                      <option value="1" selected>پاسخ داده شده</option>
                      <option value="0">بسته شده</option>
                    </select>
                    <?php
                }break;

                case 2:
                {
                    ?>
                    <select id="ticket-status" class="bg-workingon" onchange="changeStatusTicket(2)">
                      <option value="3">در انتظار پاسخ</option>
                      <option value="2" selected>درحال رسیدگی</option>
                      <option value="1">پاسخ داده شده</option>
                      <option value="0">بسته شده</option>
                    </select>
                    <?php
                }break;

                default:
                {
                  ?>
                  <select id="ticket-status" class="bg-waiting" onchange="changeStatusTicket(3)">
                    <option value="3" selected>در انتظار پاسخ</option>
                    <option value="2">درحال رسیدگی</option>
                    <option value="1">پاسخ داده شده</option>
                    <option value="0">بسته شده</option>
                  </select>
                  <?php

                }break;
              }
              ?>
                  <h2 id="ticket-date-time-style" class="set-the-font"><span>تاریخ</span> : <br/><span><?php echo $row['t_date'];?></span></h2>
                </div>

                <!-- load main text -->
                <div class="message-style def-border">
                  <h2 class="message-sender">مشتری</h2>
                    <h2 class="message-text-style"><?php echo $row['t_main_text'];?></h2>
                </div>
              <?php

            }
          }
          else
          {
            $te = convert_error_2str($conn->error);
            show_result("error","خطا در دریافت اطلاعات تیکت <br/>.$te","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
          }



          //fetch messages from customer and admin table
          $sql_search_customer_messages = "SELECT tm_message_text,tm_appendixes,tm_date,tm_admin_mode FROM t_ticket_customer_message WHERE tm_t_id='$id' AND tm_c_id='$ticket_owner' UNION SELECT tm_message_text,tm_appendixes,tm_date,tm_admin_mode FROM t_ticket_admin_message WHERE tm_t_id='$id' ORDER BY tm_date;";
          $result_search2 = $conn->query($sql_search_customer_messages);
          if ($result_search2->num_rows > 0)
          {
            while($row = $result_search2->fetch_assoc())
            {
              ?>
              <div class="message-style def-border">
                <?php
                if($row['tm_admin_mode']==0)
                {
                  ?>
                  <h2 class="message-sender">مشتری</h2>
                  <?php
                }
                else
                {
                  ?>
                  <h2 class="message-sender">مدیر</h2>
                  <?php
                }
                ?>
                  <h2 class="message-text-style"><?php echo $row['tm_message_text']?></h2>
                  <h2 class="message-appendix-title">ضمیمه ها</h2>
                  <?php


                    //appendixes divider is '~' or tilda
                    $appendixes_main = strtolower($row['tm_appendixes']);
                    for ($i=1; $i <= substr_count($appendixes_main,"~") ; $i++)
                    {
                      $pos_backslash = strpos($appendixes_main,"~");
                      $cuted_appendix = substr($appendixes_main,0,$pos_backslash+1);
                      ?>
                          <h4 class="message-appendixes-style cursor-pointer" onclick="window.open('../assets/appendixes/<?php echo $cuted_appendix;?>');">ضمیمه <?php echo $i;?></h4>
                      <?php
                      $appendixes_main = substr($appendixes_main,$pos_backslash+1);
                    }



                  ?>
                  <h2 class="message-date-style set-the-font"><span><?php echo $row['tm_date'];?></span></h2>
              </div>
              <?php
            }
          }
          // else
          // {
          //   $te = convert_error_2str($conn->error);
          //   show_result("error","q2,error:$te","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
          // }
          ?>








                <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                      <div id="base-your-response" class="def-border">
                        <h2 id="title-you-lable">شما</h2>
                        <form action="./actions/a-send-ticket.php" method="post">
                          <input type="hidden" name="tid" value="<?php echo $id;?>">
                          <textarea id="your-response-text" name="response" class="def-border" placeholder="پاسخ شما" maxlength="2500"></textarea>
                        <div id="base-buttons">
                          <input id="button-send" class="cursor-pointer unselectable" type="submit" value="ارسال">
                        </form>
                        </div>
                    </div>


          </div>



        </section>


      </div>
    </div>

    <script>
    //- - - - - ajax for modify status ticket
    function changeStatusTicket(status_value)
    {
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function()
          {
             if (this.readyState == 4 && this.status == 200)
             {
                if(this.responseText == "success")
                {
                    switch (parseInt(status_value))
                    {
                      case 0:
                          document.getElementById("ticket-status").className = 'bg-closed';
                        break;
                      case 1:
                          document.getElementById("ticket-status").className = 'bg-answered';
                        break;

                      case 2:
                          document.getElementById("ticket-status").className = 'bg-workingon';
                        break;

                      default:
                          document.getElementById("ticket-status").className = 'bg-waiting';
                        break;
                    }
                }
                else
                {
                    alert("وضعیت تیکت ویرایش نشد");
                }
             }
          };
          xhttp.open("GET", "./actions/a-change-status-ticket.php?id=<?php echo $id;?>&status="+status_value, true);
          xhttp.send();
    }
    </script>

  </body>
</html>
