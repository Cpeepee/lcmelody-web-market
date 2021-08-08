<?php
    // require ('../includes/security.php');
    require "./actions/includes/header.php";
    include ('../includes/header.php');

    //get sort mode (order status)
    $sortedX = $_GET['sort'];


?>
    <title>سبد خرید</title>
    <link rel="stylesheet" href="../assets/css/orders.css">

<?php
    include ('../includes/close-head.php');
    include ('../includes/banner.php');
    include ('../includes/menu.php');
?>


    <div style="width:100%;height:100%;">
        <?php
          include ("../includes/customer-menu.php");
        ?>


        <div id="base-orders" class="def-border set-two-font">

        <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->

          <div id="menu-order" class="set-two-font unselectable">

        <?php

            if($sortedX==0||$sortedX=="0"||$sortedX=="")
            {
              $sortedX = "processing";
            }
            switch ($sortedX)
            {
              case 'processing':
                  {
                    $the_order_by_value = "3";
                    ?>
                        <h2 id="processing" class="menu-order-titles-style menu-order-title-selected cursor-pointer" onclick="window.location=('my-orders.php?sort=processing')">در حال پردازش</h2>
                        <h2 id="awating-payment" class="menu-order-titles-style cursor-pointer" onclick="window.location=('my-orders.php?sort=payment')">در انتظار پرداخت</h2>
                        <h2 id="delivered" class="menu-order-titles-style cursor-pointer" onclick="window.location=('my-orders.php?sort=delivered')">تحویل شده</h2>
                        <h2 id="canceled" class="menu-order-titles-style cursor-pointer" onclick="window.location=('my-orders.php?sort=cancel')">لغو شده</h2>
                    <?php
                  }break;

              case 'delivered':
                  {$the_order_by_value = "1";
                    ?>
                        <h2 id="processing" class="menu-order-titles-style cursor-pointer" onclick="window.location=('my-orders.php?sort=processing')">در حال پردازش</h2>
                        <h2 id="awating-payment" class="menu-order-titles-style cursor-pointer" onclick="window.location=('my-orders.php?sort=payment')">در انتظار پرداخت</h2>
                        <h2 id="delivered" class="menu-order-titles-style menu-order-title-selected cursor-pointer" onclick="window.location=('my-orders.php?sort=delivered')">تحویل شده</h2>
                        <h2 id="canceled" class="menu-order-titles-style cursor-pointer" onclick="window.location=('my-orders.php?sort=cancel')">لغو شده</h2>
                    <?php
                  }break;

              case 'cancel':
                  {$the_order_by_value = "0";
                    ?>
                        <h2 id="processing" class="menu-order-titles-style cursor-pointer" onclick="window.location=('my-orders.php?sort=processing')">در حال پردازش</h2>
                        <h2 id="awating-payment" class="menu-order-titles-style cursor-pointer" onclick="window.location=('my-orders.php?sort=payment')">در انتظار پرداخت</h2>
                        <h2 id="delivered" class="menu-order-titles-style cursor-pointer" onclick="window.location=('my-orders.php?sort=delivered')">تحویل شده</h2>
                        <h2 id="canceled" class="menu-order-titles-style menu-order-title-selected cursor-pointer" onclick="window.location=('my-orders.php?sort=cancel')">لغو شده</h2>
                    <?php
                  }break;

              default: //==payment
                  {$the_order_by_value = "2";
                    ?>
                        <h2 id="processing" class="menu-order-titles-style cursor-pointer" onclick="window.location=('my-orders.php?sort=processing')">در حال پردازش</h2>
                        <h2 id="awating-payment" class="menu-order-titles-style menu-order-title-selected cursor-pointer" onclick="window.location=('my-orders.php?sort=payment')">در انتظار پرداخت</h2>
                        <h2 id="delivered" class="menu-order-titles-style cursor-pointer" onclick="window.location=('my-orders.php?sort=delivered')">تحویل شده</h2>
                        <h2 id="canceled" class="menu-order-titles-style cursor-pointer" onclick="window.location=('my-orders.php?sort=cancel')">لغو شده</h2>
                    <?php
                  }break;
            }

        ?>

            </div>
            <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->

            <br/> <!-- to fix the main menu javascript problem-->

            <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->

            <?php
            //fetch order details
            $all_order_ids = array();
            // $all_order_PPs = array();
            $the_order_by_value = (int)$the_order_by_value;
            $fetch_orders = "SELECT o_id,o_PP FROM t_orders WHERE `o_owner_cid`='$customerSessionId' AND `o_status`='$the_order_by_value';";
            $result_fetch_orders = $conn->query($fetch_orders);
            if ($result_fetch_orders->num_rows > 0)
            {
              while($row = $result_fetch_orders->fetch_assoc())
              {
                     array_push($all_order_ids,$row['o_id']);
                     ?>
                     <div class="order-style unselectable">
                       <div class="order-titles-style">
                         <h2 class="order-id-style set-the-font"><span>شماره سفارش</span> : <span><?php echo $row['o_id'];?></span></h2>
                         <h2 class="order-price-style set-the-font"><span>مبلغ کل</span> : <span id="final-price-<?php echo $row['o_id'];?>">0</span></h2>
                       </div>
                       <div class="base-pictures-and-button-details">
                         <div id="pictures-box-<?php echo $row['o_id'];?>" class="pictures-box-style">
                           <!-- <img class="picture-style" src="../assets/img/p-images/p100.jpg" alt="some-alt-is-here"/> -->
                           <!-- <img class="picture-style" src="../assets/img/p-images/p100.jpg" alt="some-alt-is-here"/> -->
                           <!-- <img class="picture-style" src="../assets/img/p-images/p100.jpg" alt="some-alt-is-here"/> -->
                           <!-- <img class="picture-style" src="../assets/img/p-images/p100.jpg" alt="some-alt-is-here"/> -->
                           <!-- <img class="picture-style" src="../assets/img/p-images/p100.jpg" alt="some-alt-is-here"/> -->
                           <!-- <img class="picture-style" src="../assets/img/p-images/p100.jpg" alt="some-alt-is-here"/> -->
                         </div>
                         <div id="btn-show-me-this-order-detials-<?php echo $row['o_id'];?>" class="btn-show-me-detials-style def-border cursor-pointer"  onclick="window.location=('order.php?id=<?php echo $row['o_id'];?>')">
                             <h2 class="set-the-font txt-btn-show-order-style">مشاهده سفارش</h2>
                         </div>
                       </div>
                     </div>
                     <?php

              }
            }
            else
            {
              ?>
                <h2>order by this status not found</h2>
              <?php
              // show_result("error","error while loading order data / order is not exists","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
            }






            $oipid = array();
            //for count total price order
            $oc_amounts = array();
            $oc_price = array();
            $oc_discount = array();


            ?>

              <script>
                //introduce variable to count pictures added
                var pic_added = 0;
              </script>
            <?php
            //fetch order items
            foreach ($all_order_ids as $value)
            {
              $fetch_order_items = "SELECT oi_p_id,oi_amount,oi_price,oi_discount FROM t_orders_items WHERE oi_o_id='$value';";
              $result_fetch_order_items = $conn->query($fetch_order_items);
              if ($result_fetch_order_items->num_rows > 0)
              {
                while($row = $result_fetch_order_items->fetch_assoc())
                {
                  ?>
                  <script>
                  pic_added++;
                  if(pic_added <= 6)
                  {
                    var node = document.createElement("IMG");
                    node.className = "picture-style";
                    node.src = "../assets/img/p-images/<?php echo $row['oi_p_id'];?>-a.jpg";
                    document.getElementById("pictures-box-<?php echo $value;?>").appendChild(node);
                  }
                  </script>
                  <?php
                  //for total cost
                  array_push($oc_amounts,str_replace(",","",$row['oi_amount']));
                  array_push($oc_price,str_replace(",","",$row['oi_price']));
                  array_push($oc_discount,str_replace(",","",$row['oi_discount']));
                }
                ?>
                <script>pic_added=0;</script>
                <?php

                            //count total cost
                            $total_order_cost=0;
                            $total_order_cost=array_map(function ($oc_price,$oc_discount,$oc_amounts)
                            {
                                $total = $oc_price - $oc_discount;
                                $GLOBALS['$total_order_cost'] += $total*$oc_amounts;
                            }, $oc_price,$oc_discount,$oc_amounts);

                            $cost_tol = $GLOBALS['$total_order_cost'];
                            ?>
                            <script>
                                  document.getElementById('final-price-<?php echo $value;?>').textContent = "<?php echo number_format($cost_tol);?>";
                            </script>
                            <?php

                            //reset arraies
                            $oc_amounts = array();
                            $oc_price = array();
                            $oc_discount = array();
              }
              else
              {
                show_result("error","خطا محصولی در این سفارش یافت نشد","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
              }
            }






            ?>
            <!-- <div id="order-abcxyz123" class="order-style unselectable"> -->
            <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->



        </div>
    </div>

  </body>
</html>
<?php require "./includes/footer.php";?>
