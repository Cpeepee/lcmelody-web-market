  <?php
      // require ('../includes/security.php');
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
                      <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->

                        <div id="base-average-price-buttons" class="set-two-font">
                            <div id="base-total-prices">
                                <h2 ><span>مبلغ کل</span> : <span>۱۲۳,۱۲۳,۱۲۳</span></h2>
                                <h2 ><span>هزینه پست</span> : <span>۱۲۳,۱۲۳,۱۲۳</span></h2>
                            </div>

                            <div id="submit-cartlist" class="cursor-pointer">
                                <h2>ثبت سفارش</h2>
                            </div>
                        </div>
                      <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->










            <?php
            //fetch customer cart list information
            $fetch_cartlist = "SELECT cl_p_id,cl_p_amount FROM t_cart_list WHERE `cl_c_id`='$customerSessionId';";
            $result_fetch_cartlist = $conn->query($fetch_cartlist);
            if ($result_fetch_cartlist->num_rows > 0)
            {
              while($row = $result_fetch_cartlist->fetch_assoc())
              {
                     fetch_product_information($row['cl_p_id'],$row['cl_p_amount']);
              }
            }
            else
              show_result("error","error while loading customer data","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)



              function fetch_product_information($pid,$pamount)
              {
                  //fetch product information requirement
                  $fetch_cartlist = "SELECT p_title,p_price FROM t_product WHERE `cl_c_id`='$customerSessionId';";
                  $result_fetch_cartlist = $conn->query($fetch_cartlist);
                  if ($result_fetch_cartlist->num_rows > 0)
                  {
                    while($row = $result_fetch_cartlist->fetch_assoc())
                    {
                           ?>
                                     <div id="item-<?php echo $pid;?>" class="item-style def-border set-two-font unselectable">
                                       <img class="item-picture-style" src="../assets/img/p-images/<?php echo $pid?>-a.jpg" alt="product-image"/>
                                       <h2 class="item-title"><?php echo $row['p_title'];?></h2>
                                       <h2 class="item-price"><?php echo $row['p_price'];?></h2>
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
                    show_result("error","error while loading customer data","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)


              }
          ?>



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

                        }break;

                        case 'plus':
                        {
                          var old_amount = document.getElementById("amount-show-"+pro_id).textContent;
                          old_amount++;
                          if(old_amount>=99)
                              alert("max value for amount a product can not be more than 99");
                          else
                            document.getElementById("amount-show-"+pro_id).textContent = old_amount;

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

              default:
              {
                  //error
              }break;
            }
            xhttp.open("GET", "./actions/"+action_page+"?id="+pro_id, true);
            xhttp.send();
      }
      </script>


  </body>
</html>
<?php require "./includes/footer.php";?>
