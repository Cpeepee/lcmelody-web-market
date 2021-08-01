<?php require './actions/includes/header.php';?>
<?php include ('./includes/the-header.php');?>
<title>سفارش ها - ال سی ملودی</title>
<link rel="stylesheet" href="./assets/css/orders.css">
<?php include ('./includes/the-close-head.php');?>
<?php include ('./includes/the-banner.php'); ?>

    <div id='main-layer'>
      <?php include('./includes/the-menu.php'); ?>
      <div id="base-orders" class="def-border set-two-font">
        <h1 id="title-form">سفارش ها</h1>

        <section id="parrent-section-style">
          <button id="button-search" type="button" onclick="window.open('search.php?for=order');">جستجو</button>

          <?php
          //fetch orders
          $sql_search = "SELECT  o_id,o_status,o_PSC,o_date FROM t_orders ORDER BY o_status DESC , o_PSC DESC;";
          $result_search = $conn->query($sql_search);
          if ($result_search->num_rows > 0)
          {
            while($row = $result_search->fetch_assoc())
            {
                   ?>
                       <div class="order-items cursor-pointer def-border">
                         <div class="make-center-details">
                           <h3 class="order-summer-info-style"><span>سفارش</span> : <span><?php echo $row['o_id'];?><span></h3>
                             <?php
                             //convert numbers from db to text for staus payment and order stauts
                             $order_status_text;
                             $order_payment_status_text;
                             switch ($row['o_status'])
                             {
                               case 0:
                                    $order_status_text = "لغو شده";
                                 break;
                               case 1:
                                    $order_status_text = "تحویل شده";
                                 break;

                               case 2:
                                    $order_status_text = "در انتظار پرداخت";
                                 break;

                               default:
                                  $order_status_text = "درحال پردازش";
                                 break;
                             }


                             switch ($row['o_PSC'])
                             {
                               case 0:
                                  $order_payment_status_text = "نشده";
                                 break;

                               default:
                                  $order_payment_status_text = "شده";
                                 break;
                             }
                             ?>
                           <h3 class="order-summer-info-style"><span>وضعیت</span> : <span><?php echo $order_status_text;?><span></h3>
                           <h3 class="order-summer-info-style"><span>وضعیت پرداخت</span> : <span><?php echo $order_payment_status_text;?><span></h3>
                           <h3 class="order-summer-info-style"><span>تاریخ</span> : <span><?php echo $row['o_date'];?><span></h3>
                             <button class="button-show-more-info cursor-pointer" type="button" onclick="window.open('edit-order.php?id=<?php echo $row['o_id'];?>');">جزئیات</button>
                         </div>
                       </div>
                   <?php
            }
          }
          else
          {
            $te = convert_error_2str($conn->error);
            show_result("error","error: $te","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
          }

          ?>


            <br/>
        </section>


      </div>
    </div>
  </body>
</html>
<?php require './actions/includes/footer.php';?>
