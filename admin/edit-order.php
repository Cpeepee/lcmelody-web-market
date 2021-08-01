<?php require ('./includes/the-security.php'); ?>
<?php include ('./includes/the-header.php');?>
<title>ویرایش سفارش  - ال سی ملودی</title>
<link rel="stylesheet" href="./assets/css/order.css">
<?php include ('./includes/the-close-head.php');?>
<?php include ('./includes/the-banner.php'); ?>

    <div id='main-layer'>
      <?php include('./includes/the-menu.php'); ?>
      <div id="base-order-edit" class="def-border set-two-font">
        <h1 id="title-form">ویرایش سفارش</h1>


        <?php
        //get id and check that
        $id = $_GET['id'];
        $id = (int)$id;
        if (empty($_GET))
        {
          show_result("error","please enter order id!","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
        }

        //fetch order info
        $sql_search = "SELECT o_status,o_PP,o_PTC,o_PSC,o_owner_cid,o_date FROM t_orders WHERE o_id=$id;";
        $result_search = $conn->query($sql_search);
        if ($result_search->num_rows > 0)
        {
          while($row = $result_search->fetch_assoc())
          {
                 $o_post_price = $row['o_PP'];
                 $o_status = $row['o_status'];
                 $o_payment_tracig_code = $row['o_PTC'];
                 $o_date = $row['o_date'];
                 $o_owner = $row['o_owner_cid'];
                 $o_payment_status = $row['o_PSC'];

          }
        }
        else
        {
          $te = convert_error_2str($conn->error);
          show_result("error","Order (id=$id) isn\'t exists error: $te","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
        }
        ?>



        <section id="parrent-section-style">
              <div id="buttons-divider">
                <form action="./actions/a-order.php" method="post">

                    <section id="right-side" class="sides-style">
                      <h2 class="labels-style">شناسه سفارش<span id="order-id" class="second-label-style"><?php echo $id;?></span></h2>
                      <div class="divider-inputs">
                        <h2 class="labels-style floatright">وضعیت سفارش</h2>
                          <select id="order-status" class="combobox-style" name="order-status">
                            <?php
                            switch ($o_status)
                            {
                              case 1:
                              {
                                ?>
                                <option value="3">درحال پردازش</option>
                                <option value="2">در انتظار پرداخت</option>
                                <option value="1" selected>تحویل شده</option>
                                <option value="0">لغو شده</option>
                                <?php
                              }break;

                              case 2:
                              {
                                ?>
                                <option value="3" selected>درحال پردازش</option>
                                <option value="2">در انتظار پرداخت</option>
                                <option value="1">تحویل شده</option>
                                <option value="0">لغو شده</option>
                                <?php
                              }break;

                              case 3:
                              {
                                ?>
                                <option value="3" selected>درحال پردازش</option>
                                <option value="2">در انتظار پرداخت</option>
                                <option value="1">تحویل شده</option>
                                <option value="0">لغو شده</option>
                                <?php
                              }break;

                              default:
                              {
                                ?>
                                <option value="3">درحال پردازش</option>
                                <option value="2">در انتظار پرداخت</option>
                                <option value="1">تحویل شده</option>
                                <option value="0" selected>لغو شده</option>
                                <?php
                              }break;
                            }

                            ?>

                          </select>
                      </div>


                      <br/>
                      <div class="divider-inputs">
                         <h2 class="labels-style floatright">وضعیت پرداخت</h2>
                         <select id="payment-status" class="combobox-style" name="payment-status">
                           <?php
                           switch ($o_payment_status)
                           {
                             case 0:
                             {
                               ?>
                               <option value="1">انجام شده</option>
                               <option value="0" selected>انجام نشده است</option>
                               <?php
                             }break;

                             default:
                             {
                               ?>
                               <option value="1" selected>انجام شده</option>
                               <option value="0">انجام نشده است</option>
                               <?php
                             }break;
                           }
                           ?>

                         </select>
                      </div>
                      <br/>
                      <div class="divider-inputs">
                         <h2 class="labels-style floatright">هزینه پست</h2>
                         <input id="order-post-price" class="inputs-style inputs-small-style dirltr" type="text" value="<?php echo $o_post_price;?>" name="post-price">
                      </div>
                      <br/>
                      <div class="divider-inputs">
                         <h2 class="labels-style floatright">کد پیگیری پرداخت</h2>
                         <input id="order-payment-tracking-code" class="inputs-style inputs-small-style dirltr" type="text" value="<?php echo $o_payment_tracig_code;?>" name="payment-tracking-code">
                      </div>
                    </section>


                    <section id="left-side" class="sides-style">
                      <div class="divider-inputs">
                        <h2 class="labels-style floatright">تاریخ ثبت سفارش</h2>
                        <input id="order-registration-date" class="inputs-style inputs-small-style dirltr" type="text" value="<?php echo $o_date;?>" name="order-submited-date">
                      </div>
                      <br/>


                                      <?php
                                      //fetch order items
                                      $o_products = array();

                                      //for count total price order
                                      $o_amounts = array();
                                      $o_price = array();
                                      $o_discount = array();


                                      $sql_search = "SELECT oi_p_id,oi_amount,oi_price,oi_discount FROM t_orders_items WHERE oi_o_id=$id;";
                                      $result_search = $conn->query($sql_search);
                                      $total_order_cost = 0;

                                      if ($result_search->num_rows > 0)
                                        while($row = $result_search->fetch_assoc())
                                        {
                                          array_push($o_products,$row['oi_p_id']);

                                          //calculate order total cost : product_price = price - discount * amount------------------------------------------------------------------
                                          $total_order_cost += $row['oi_price'] - $row['oi_discount'] * $row['oi_amount'];
                                        }
                                      else
                                      {
                                        $te = convert_error_2str($conn->error);
                                        show_result("error","Order (id=$id) have not items error: $te","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
                                      }



                                      // array_push($o_amounts,$row["oi_amount"]);
                                      // array_push($o_price,$row["oi_price"]);
                                      // array_push($o_discount,$row["oi_discount"]);
                                      // array_map(function ($o_price,$o_discount,$o_amounts)
                                      // {
                                      //     $total_order_cost = $o_price - $o_discount * $o_amounts;
                                      // }, $o_price,$o_discount,$o_amounts);
                                      ?>


                      <div class="divider-inputs">
                        <h2 class="labels-style floatright">مبلغ کل سفارش</h2>
                        <!-- fetch data from orderitems sorted by order id , (price-discount*amount)+ $postprice-->
                        <input id="order-total-price" class="inputs-style inputs-small-style dirltr" type="text" value="<?php echo $total_order_cost;?>">
                      </div>

                    </section>


                </div>




                <section id="section-products">
                  <!-- products images would be here -->

                  <h2 id="products-title">محصولات</h2>
                  <section id="section-product-list" class="unselectable">

                    <div class="divider-product-images">
                      <img class="product-image-style cursor-pointer" src="../assets/img/p-images/p100.jpg" alt="some"/>
                      <img class="button-product-delete-style cursor-pointer" src="../assets/img/icons/delete-50.png" alt="delete"/>
                    </div>

                  </section>


                </section>
          <br/>

          <div id="base-buttons">
            <input id="button-save-order-edits" class="button-style cursor-pointer" type="submit" value="ذخیره تغییرات"></input>
          </form>

            <button id="button-order-owner" class="button-style cursor-pointer" type="button" name="button">مشخصات سفارش دهنده</button>
          </div>

        </section>


      </div>
    </div>


  </body>
</html>
