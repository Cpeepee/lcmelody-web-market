<?php
    require "./actions/includes/header.php";
    include ('../includes/header.php');

    $orderid = $_GET['id'];
    $orderid = (int)$orderid;
    if($orderid == "")
    {
        show_result("error","لطفا مقادیر معتبر را وارد کنید","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
    }
?>
    <title>سبد خرید</title>
    <link rel="stylesheet" href="../assets/css/order.css">

<?php
    include ('../includes/close-head.php');
    include ('../includes/banner.php');
    include ('../includes/menu.php');
?>


    <div id="base-page">
        <?php
          include ("../includes/customer-menu.php");
        ?>


        <div id="base-order" class="def-border set-two-font">

          <div id="order-details">
                <div id="right-order-detail-sub">


                  <?php
                  //fetch order info
                  $fetch_order = "SELECT o_status,o_PP,o_date FROM t_orders WHERE `o_id`='$orderid' AND `o_owner_cid`='$customerSessionId';";
                  $fetch_order = $conn->query($fetch_order);
                  if ($fetch_order->num_rows > 0)
                  {
                    while($row = $fetch_order->fetch_assoc())
                    {
                        $oo_post_price = $row['o_PP'];
                        $oo_date = $row['o_date'];
                        $oo_status = $row['o_status'];
                      ?>
                            <h3>شماره سفارش : <span id="order-id"><?php echo $orderid;?></span></h3>
                            <?php
                            switch ($row['o_status'])
                            {
                              case '0':
                              {
                                  $ostatus_text = "لغو شده";
                              }break;

                              case '1':
                              {
                                  $ostatus_text = "تحویل شده";
                              }break;

                              case '2':
                              {
                                  $ostatus_text = "در انتظار پرداخت";
                              }break;

                              default:
                              {
                                  $ostatus_text = "در حال پردازش";
                              }break;
                            }
                            ?>

                            <h3>وضعیت : <span id="order-status"><?php echo $ostatus_text;?></span></h3>
                          </div>
                          <div id="left-order-detail-sub">



                       <?php
                    }
                  }
                  else
                    show_result("error","error while loading customer data","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)




                    //for count total price order
                    $oo_amounts = array();
                    $oo_price = array();
                    $oo_discount = array();

                    //fetch order items
                    $fetch_orderitems = "SELECT oi_p_id,oi_amount,oi_price,oi_discount FROM t_orders_items WHERE `oi_o_id`='$orderid';";
                    $result_fetch_orderitems = $conn->query($fetch_orderitems);
                    if ($result_fetch_orderitems->num_rows > 0)
                    {
                      while($row = $result_fetch_orderitems->fetch_assoc())
                      {

                             fetch_product_information($row['oi_p_id'],$row['oi_amount'],$row['oi_price'],$row['oi_discount']);
                             //for total cost
                             array_push($oo_amounts,str_replace(",","",$row['oi_amount']));
                             array_push($oo_price,str_replace(",","",$row['oi_price']));
                             array_push($oo_discount,str_replace(",","",$row['oi_discount']));
                      }
                    }
                    else
                      show_result("error","error while loading order items","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)

                    //count total cost
                    $total_order_cost=0;
                    $total_order_cost=array_map(function ($oo_price,$oo_discount,$oo_amounts)------------------------
                    {
                        $total = $oo_price - $oo_discount;
                        $GLOBALS['$total_order_cost'] += $total*$oo_amounts;
                    }, $oo_price,$oo_discount,$oo_amounts);
                    $cost_tol = $GLOBALS['$total_order_cost'] + str_replace(",","",$oo_post_price);



                  ?>


                                              <h3>مبلغ کل : <span id="order-price"><?php echo $cost_tol;?></span></h3>
                                              <h3>هزینه پست : <span id="order-post-price"><?php echo $oo_post_price;?></span></h3>
                                              <h3>تاریخ ثبت سفارش : <span id="order-date"><?php echo $oo_date;?></span></h3>

                </div>
          </div>

          <div id="base-products">







            <?php
              //set order items
              function fetch_product_information($productId,$amount,$price,$discount)
              {
                  //fetch product information requirement
                  $fetch_product_info = "SELECT p_title FROM t_product WHERE `p_id`='$productId';";
                  $result_product_info = $conn->query($fetch_product_info);
                  if ($result_product_info->num_rows > 0)
                  {
                    while($row = $result_product_info->fetch_assoc())
                    {
                        ?>
                               <div class="base-product-list">
                                     <div class="right-side-product-list cursor-pointer">
                                               <div class="product-picture-style cursor-pointer">
                                                 <img class="img-style-pro unselectable" src="../assets/img/p-images/<?php echo $productId?>-a.jpg" alt="product-image"/>
                                                 <h2 class="product-amount-style unselectable"><?php echo $amount;?></h2>
                                               </div>
                                               <h2 class="title-product"><?php echo $row['p_title'];?></h2>
                                     </div>

                                     <div class="left-side-product-list">
                                         <div class="product-amount-price-discount-style">
                                           <h3>مبلغ : <span><?php echo $price;?></span></h3>
                                           <h3>تخفیف : <span><?php echo $discount;?></span></h3>
                                           <h3>تعداد : <span><?php echo $amount;?></span></h3>
                                         </div>
                                     </div>
                               </div>
                        <?php
                    }
                  }
                }
            ?>


            <div id="buttons-base">
            <?php
            $oo_status = (int)$oo_status;
            if($oo_status == 2 || $oo_status == 3)
            {
              ?>
                  <div id="button-cancel-on-awaiting-payment" class="button-style unselectable cursor-pointer" onclick="window.location=('./actions/a-cancel-order.php?id=<?php echo $orderid;?>')">
                      <h2 class="text-button-cancel-pay-style">لغو سفارش</h2>
                  </div>
              <?php
            }


            if($oo_status == 2)
            {
              ?>
              <div id="button-pay-on-awaiting-payment" class="button-style unselectable cursor-pointer">
                <h2 class="text-button-cancel-pay-style">پرداخت</h2>
              </div>
              <?php
            }
            ?>




            </div>

          </div>


        </div>

    </div>

  </body>
</html>
