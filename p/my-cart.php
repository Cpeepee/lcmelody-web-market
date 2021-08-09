  <?php
      require "./actions/includes/header.php";
      include ('../includes/header.php');
  ?>
      <title>سبد خرید</title>
      <link rel="stylesheet" href="../assets/css/cart-list.css">

  <?php
      include ('../includes/close-head.php');
      include ('../includes/banner.php');
      include ('../includes/menu.php');
  ?>


      <div style="width:100%;height:100%;">
          <?php
            include ("../includes/customer-menu.php");
            ?>

                      <div id="base-cartlist-items" class="def-border set-two-font"> <!-- exipred note :the height #base-cartlist-items must calclate before show , height = x*y  ;note(x=count of items in cartlist)&(y=235px per one item)-->
                        <h1>سبد خرید</h1>

                      <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->

            <?php
            //for total-cost
            $product_amount_collector = array();
            $product_price_collector = array();
            $product_discount_collector = array();

            //for product title and price
            $pro_id_list_for_by_replace_js = array();

            //fetch customer cart list information
            $fetch_cartlist = "SELECT cl_p_id,cl_p_amount FROM t_cart_list WHERE `cl_c_id`='$customerSessionId';";
            $result_fetch_cartlist = $conn->query($fetch_cartlist);
            if ($result_fetch_cartlist->num_rows > 0)
            {
              while($row = $result_fetch_cartlist->fetch_assoc())
              {
                  $pid = $row['cl_p_id'];
                  array_push($pro_id_list_for_by_replace_js,$row['cl_p_id']);
                  array_push($product_amount_collector,str_replace(",","",$row['cl_p_amount']));
                  $pamount = $row['cl_p_amount'];
                  ?>
                  <div id="item-<?php echo $pid;?>" class="item-style def-border set-two-font unselectable">
                    <img class="item-picture-style cursor-pointer" src="../assets/img/p-images/<?php echo $pid?>-a.jpg" alt="product-image" onclick="window.open('product.php?id=<?php echo $pid;?>')"/>
                    <h2 id="title-item-<?php echo $pid;?>" class="item-title">?</h2>
                    <h2 id="price-item-<?php echo $pid;?>" class="item-price set-the-font">?</h2>
                    <h3 class="item-price-unit">تومان</h3>
                      <div id="button-plus-minus-x" class="button-plus-minus-style">
                        <div class="centered-button-plus-minus-style">

                          <h2 class="btn-minus-plus-style cursor-pointer FloatLeft" onclick="changeAmount('minus',<?php echo $pid;?>)">-</h2>
                          <h2 class="btn-minus-plus-style cursor-pointer FloatRight" onclick="changeAmount('plus',<?php echo $pid;?>)">+</h2>
                          <h2 id="amount-show-<?php echo $pid;?>" class="amount-style set-two-font"><?php echo $pamount;?></h2>
                        </div>
                      </div>
                      <div class="cursor-pointer button-remove-style" id="button-remove-x" onclick="changeAmount('delete',<?php echo $pid;?>)">
                        <h2 class="text-button-remove-style">حذف</h2>
                      </div>
                  </div>


                  <?php
              }
            }
            else
              show_result("error","سبد خرید خالی است","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)


              foreach ($pro_id_list_for_by_replace_js as $value)
              {

                $fetch_pro_title_price = "SELECT p_title,p_price,p_discount FROM t_product WHERE `p_id`='$value';";
                $result_pro_title_price = $conn->query($fetch_pro_title_price);
                if ($result_pro_title_price->num_rows > 0)
                {
                  while($row = $result_pro_title_price->fetch_assoc())
                  {
                        array_push($product_price_collector,str_replace(",","",$row['p_price']));
                        array_push($product_discount_collector,str_replace(",","",$row['p_discount']));
                         ?>
                         <script>
                              document.getElementById("title-item-<?php echo $value;?>").textContent = "<?php echo $row['p_title'];?>";
                              document.getElementById("price-item-<?php echo $value;?>").textContent = "<?php echo $row['p_price'];?>";
                         </script>
                         <?php

                  }
                }
                else
                  show_result("error","اطلاعات محصول دریافت نشد","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
              }


              //count total cost
              $total_order_costs=0;
              array_map(function ($product_price_collector,$product_amount_collector,$product_discount_collector)
              {
                  $total = $product_price_collector - $product_discount_collector;
                  $GLOBALS['$total_order_costs'] += $total*$product_amount_collector;
              }, $product_price_collector,$product_amount_collector,$product_discount_collector);
              $cost_tol = $GLOBALS['$total_order_costs']+15000;
          ?>
          <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->

            <div id="base-average-price-buttons" class="set-two-font">
                <div id="base-total-prices">
                  <h2 ><span>هزینه پست</span> : <span class="set-the-font">15,000</span></h2>
                    <h2 ><span>مبلغ کل</span> : <span id="total-cost" class="set-the-font">?</span></h2>
                </div>

                <div id="submit-cartlist" class="cursor-pointer unselectable" onclick="window.location=('./actions/a-submit-cartlist.php')">
                    <h2>ثبت سفارش</h2>
                </div>
            </div>
          <script>
               document.getElementById("total-cost").textContent = "<?php echo number_format($cost_tol);?>";
          </script>


          <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
          <br/><br/> <!-- while scrolling down , the menu javascript code have problem (when items are less than 5) this BRs fix this issues (auto scroll to up)-->
          <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
          </div>
      </div>






                                      <!-- ajax funtion modify amounts and delete product from cartlist -->
                                      <script>
                                      function changeAmount(mode,pro_id)
                                      {
                                            var xhttp = new XMLHttpRequest();
                                            xhttp.onreadystatechange = function()
                                            {
                                               if (this.readyState == 4 && this.status == 200)
                                               {
                                                  if(this.responseText == "success")
                                                  {
                                                      switch(mode)
                                                      {
                                                        case 'minus':
                                                        {
                                                            var old_amount = document.getElementById("amount-show-"+pro_id).textContent;
                                                            old_amount--;
                                                            if(old_amount<=0)
                                                                changeAmount('delete',pro_id);
                                                            else
                                                                document.getElementById("amount-show-"+pro_id).textContent = old_amount;
                                                                // location.reload();
                                                        }break;

                                                        case 'plus':
                                                        {
                                                          var old_amount = document.getElementById("amount-show-"+pro_id).textContent;
                                                          old_amount++;
                                                          if(old_amount>99)
                                                              alert("تعداد محصول نمی تواند بیشتر از ۹۹ تا بشود");
                                                          else
                                                              document.getElementById("amount-show-"+pro_id).textContent = old_amount;
                                                            // location.reload();


                                                        }break;

                                                        case 'delete':
                                                        {
                                                            location.reload();
                                                        }break;
                                                      }
                                                  }
                                                  else
                                                  {
                                                      alert("action failed");
                                                  }
                                               }
                                            };
                                            var action_page;
                                            switch (mode)
                                            {
                                              case 'minus':
                                              {
                                                action_page = "a-minus-amount-cartlist.php";
                                              }break;

                                              case 'plus':
                                              {
                                                action_page = "a-plus-amount-cartlist.php";

                                              }break;

                                              case 'delete':
                                              {
                                                action_page = "a-delete-product-from-cartlist.php";
                                              }break;

                                            }

                                            //check before send
                                            if(mode=="plus")
                                            {
                                              var old_amount = document.getElementById("amount-show-"+pro_id).textContent;
                                              old_amount++;
                                              if(old_amount>99)
                                              alert("تعداد محصول نمی تواند بیشتر از ۹۹ تا بشود");
                                              else
                                              {
                                                xhttp.open("GET", "./actions/"+action_page+"?id="+pro_id, true);
                                                xhttp.send();
                                              }
                                            }
                                            else
                                            {
                                              xhttp.open("GET", "./actions/"+action_page+"?id="+pro_id, true);
                                              xhttp.send();
                                            }
                                      }
                                      </script>


  </body>
</html>
<?php require "./includes/footer.php";
require './actions/includes/footer.php';?>
