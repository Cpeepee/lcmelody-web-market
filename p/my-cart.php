  <?php
      require ('../includes/security.php');
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

          <div id="item-x" class="item-style def-border set-two-font unselectable">
            <img class="item-picture-style" src="../assets/img/p-images/p1000.jpg" alt="pro-100-img"/>
            <h2 class="item-title">میکروفن داینامیک شور مدل Shure SMS8
            </h2>
            <h2 class="item-price">۱۰,۰۰۰,۰۰۰</h2>
            <h3 class="item-price-unit">تومان</h3>
              <div id="button-plus-minus-x" class="button-plus-minus-style">
                <div class="centered-button-plus-minus-style">
                  <h2 class="btn-minus-plus-style cursor-pointer FloatLeft">-</h2>
                  <h2 class="btn-minus-plus-style cursor-pointer FloatRight">+</h2>
                  <h2 class="amount-style">۹۹</h2>
                </div>
              </div>
              <div class="cursor-pointer button-remove-style" id="button-remove-x">
                <h2 class="text-button-remove-style">حذف</h2>
              </div>
          </div>

          <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->

          <div id="item-x" class="item-style def-border set-two-font unselectable">
            <img class="item-picture-style" src="../assets/img/p-images/p1000.jpg" alt="pro-100-img"/>
            <h2 class="item-title">میکروفن داینامیک شور مدل Shure SMS8
            </h2>
            <h2 class="item-price">۱۰,۰۰۰,۰۰۰</h2>
            <h3 class="item-price-unit">تومان</h3>
              <div id="button-plus-minus-x" class="button-plus-minus-style">
                <div class="centered-button-plus-minus-style">
                  <h2 class="btn-minus-plus-style cursor-pointer FloatLeft">-</h2>
                  <h2 class="btn-minus-plus-style cursor-pointer FloatRight">+</h2>
                  <h2 class="amount-style">۹۹</h2>
                </div>
              </div>
              <div class="cursor-pointer button-remove-style" id="button-remove-x">
                <h2 class="text-button-remove-style">حذف</h2>
              </div>
          </div>
          <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->

          <div id="item-x" class="item-style def-border set-two-font unselectable">
            <img class="item-picture-style" src="../assets/img/p-images/p1000.jpg" alt="pro-100-img"/>
            <h2 class="item-title">میکروفن داینامیک شور مدل Shure SMS8
            </h2>
            <h2 class="item-price">۱۰,۰۰۰,۰۰۰</h2>
            <h3 class="item-price-unit">تومان</h3>
              <div id="button-plus-minus-x" class="button-plus-minus-style">
                <div class="centered-button-plus-minus-style">
                  <h2 class="btn-minus-plus-style cursor-pointer FloatLeft">-</h2>
                  <h2 class="btn-minus-plus-style cursor-pointer FloatRight">+</h2>
                  <h2 class="amount-style">۹۹</h2>
                </div>
              </div>
              <div class="cursor-pointer button-remove-style" id="button-remove-x">
                <h2 class="text-button-remove-style">حذف</h2>
              </div>
          </div>

          <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->

          <div id="item-x" class="item-style def-border set-two-font unselectable">
            <img class="item-picture-style" src="../assets/img/p-images/p1000.jpg" alt="pro-100-img"/>
            <h2 class="item-title">میکروفن داینامیک شور مدل Shure SMS8
            </h2>
            <h2 class="item-price">۱۰,۰۰۰,۰۰۰</h2>
            <h3 class="item-price-unit">تومان</h3>
              <div id="button-plus-minus-x" class="button-plus-minus-style">
                <div class="centered-button-plus-minus-style">
                  <h2 class="btn-minus-plus-style cursor-pointer FloatLeft">-</h2>
                  <h2 class="btn-minus-plus-style cursor-pointer FloatRight">+</h2>
                  <h2 class="amount-style">۹۹</h2>
                </div>
              </div>
              <div class="cursor-pointer button-remove-style" id="button-remove-x">
                <h2 class="text-button-remove-style">حذف</h2>
              </div>
          </div>

          <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
          <br/><br/> <!-- while scrolling down , the menu javascript code have problem (when items are less than 5) this BRs fix this issues (auto scroll to up)-->
          <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
          </div>
      </div>
  </body>
</html>
