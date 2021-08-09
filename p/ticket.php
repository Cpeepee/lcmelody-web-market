<?php
    require "./actions/includes/header.php";
    include ('../includes/header.php');
?>
    <title>تیکت</title>
    <link rel="stylesheet" href="../assets/css/ticket.css">
     <meta http-equiv="refresh" content="180">

<?php
    include ('../includes/close-head.php');
    include ('../includes/banner.php');
    include ('../includes/menu.php');
?>

    <div id="base-page">
        <?php
          include ("../includes/customer-menu.php");
        ?>


        <div id="base-ticket" class="def-border set-two-font">

          <?php
          $tId = $_GET['id'];
          if($tId=="")
          {
            show_result("error","لطفا مقادیر معتبر را وارد کنید","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
          }

          //fetch ticket info
              $fetch_ticket_info = "SELECT t_subject,t_status,t_main_text,t_date FROM t_ticket WHERE `t_id`='$tId';";
              $r_fetch_ticket = $conn->query($fetch_ticket_info);
              if ($r_fetch_ticket->num_rows > 0)
              {
                while($row = $r_fetch_ticket->fetch_assoc())
                {
                       $t_sub = $row['t_subject'];
                       $t_status = $row['t_status'];
                       $t_text = $row['t_main_text'];
                       $t_date = $row['t_date'];
                }
              }
              else
                show_result("error","اطلاعات تیکت دریافت نشد","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
          ?>

          <h2 id="ticket-title">موضوع:
          <span><?php echo $t_sub;?></span></h2>

            <div id="box-ticket-info">
              <h2 id="label-ticket-status">وضعیت : </h2>
              <?php
              //status convert
              $status_text;
              $status_color_mode;
              switch ($t_status)
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
              <div id="ticket-status" class="bg-<?php echo $status_color_mode;?>">
                <h3 id="text-ticket-status"><?php echo $status_text;?></h3>
              </div>
              <h2 id="ticket-date"><span>تاریخ</span> : <span class="set-the-font"><?php echo $t_date;?></span></h2>
            </div>

            <div class="message-style def-border">
              <h2 class="message-sender">شما</h2>
              <h2 class="message-text-style"><?php echo $t_text;?></h2>
            </div>


            <!--  -->




            <?php
            //fetch ticket messages
            //fetch messages from customer and admin table
            $sql_search_customer_messages = "SELECT tm_message_text,tm_appendixes,tm_date,tm_admin_mode FROM t_ticket_customer_message WHERE tm_t_id='$tId' AND tm_c_id='$customerSessionId' UNION SELECT tm_message_text,tm_appendixes,tm_date,tm_admin_mode FROM t_ticket_admin_message WHERE tm_t_id='$tId' ORDER BY tm_date;";
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
                    <h2 class="message-sender">شما</h2>
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

                    <?php


                      //appendixes divider is '~' or tilda
                      $appendixes_main = strtolower($row['tm_appendixes']);
                      if($appendixes_main == "" || $appendixes_main == "0" || $appendixes_main == " " || $appendixes_main == 0)
                      {
                        ?>
                        <!-- <h2 class="message-appendix-title"></h2> -->
                        <?php
                      }
                      else
                      {
                        ?>
                        <h2 class="message-appendix-title">ضمیمه ها</h2>
                        <?php
                      }

                      $appendixes_round = substr_count($appendixes_main,"~");
                      for ($i=1; $i <= $appendixes_round ; $i++)
                      {
                        $pos_backslash = strpos($appendixes_main,"~");
                        $cuted_appendix = substr($appendixes_main,0,$pos_backslash+1);
                        $cuted_appendix = str_replace('~','',$cuted_appendix);
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
            ?>




        <?php
        if($t_status!=0 || $t_status != "0")
        {
          ?>
          <div id="base-your-response" class="def-border">
            <h2 id="label-your-response">شما</h2>
            <form action="./actions/a-send-response-to-ticket.php" method="post">
            <input type="hidden" name="tid" value="<?php echo $tId;?>">
            <textarea id="your-response-text" name="textResponse" class="def-border" placeholder="پاسخ شما" maxlength="2500"></textarea>
              <div id="base-buttons">
                  <input id="button-send" class="cursor-pointer unselectable" type="submit" value="ارسال">
              </div>
          </div>
          <?php
        }
        ?>
      </div>


        </div>
    </div>
    <?php require "./includes/footer.php";
    require './actions/includes/footer.php';?>
