<?php require './actions/includes/header.php';?>
<?php include ('./includes/the-header.php');?>
<title>تیکت ها - ال سی ملودی</title>
<link rel="stylesheet" href="./assets/css/tickets.css">
<?php include ('./includes/the-close-head.php');?>
<?php include ('./includes/the-banner.php'); ?>

    <div id='main-layer'>
      <?php include('./includes/the-menu.php'); ?>
      <div id="base-tickets" class="def-border set-two-font">


        <section style="width:95%;margin:2.50%;">
          <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
            <h1 id="base-ticket-title">تیکت ها</h1>
            <div id="tickets" class="def-border set-the-font">

              <?php
              //fetch tickets info
              $sql_search = "SELECT t_id,t_subject,t_status,t_date FROM t_ticket ORDER BY t_status DESC;";
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
                $te = convert_error_2str($conn->error);
                show_result("error","خطا در دریافت اطلاعات تیکت <br/>.$te","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
              }
              ?>


            </div>
        </section>


      </div>
    </div>


  </body>
</html>
