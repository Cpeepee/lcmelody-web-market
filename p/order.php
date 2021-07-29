<?php
    require ('../includes/security.php');
    include ('../includes/header.php');
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

          <div id="order-details" style=";width:100%;height:150px;border-bottom:1px solid gray;">
                <div style="width:47%;height:auto;float:right;margin-right:3%;">
                  <h3>شماره سفارش : <span id="order-id">۴۵۶۳</span></h3>
                  <h3>وضعیت : <span id="order-status">در انتظار پرداخت</span></h3>
                </div>
                <div style="width:47%;height:auto;float:left;text-align:left;margin-left:3%;">
                  <h3>مبلغ کل : <span id="order-price">۱۲۳,۱۲۳,۱۲۳</span></h3>
                  <h3>هزینه پست : <span id="order-post-price">۱۲۳,۱۲۳,۱۲۳</span></h3>
                  <h3>تاریخ ثبت سفارش : <span id="order-date">۱۲/۱۲/۱۳۱۲</span></h3>
                </div>
          </div>

          <div id="base-products" style="width:100%;height:auto;">
            <!-- <div id="make-center" style="width:90%;height:auto;margin:5px auto;display:flex;flex-flow: wrap;">
                      <div class="product-picture-awating-payment-style cursor-pointer" style="width:120px;height:120px;border-radius:10px;margin:2% 1.50% 2% 0%;">
                        <img class="unselectable" src="../assets/img/p-images/p100.jpg" alt="" href="" style="width:100%;height:100%;z-index:0;"/>
                        <h2 class="unselectable" style="color:red;z-index:20px;position:absolute;margin-top:-30px;margin-right:95px;">۰۶</h2>
                      </div>
            </div> -->




            <div class="base-product-list" style="width:90%;height:150px;margin:5px auto;display:block;border-bottom:1px solid gray;">
                  <div class="right-side-product-list cursor-pointer" style="width:73%;height:100%;float:right;">
                            <div class="product-picture-style cursor-pointer" style="width:120px;height:120px;border-radius:10px;float:right;margin:15px 1.50% 2% 0%;">
                              <img class="unselectable" src="../assets/img/p-images/p100.jpg" alt="" href="" style="width:100%;height:100%;z-index:0;"/>
                              <h2 class="unselectable" style="color:red;z-index:20px;position:absolute;margin-top:-30px;margin-right:95px;">۰۶</h2>
                            </div>
                            <h2 class="title-product" style="width:69%;float:right;margin-right:10px;word-wrap: break-word;text-align:right;">میکروفن داینامیک شور مدل Shure SMS8 میکروفن داینامیک شور مدل Shure SMS8 میکروفن داینامیک شور مدل Shure SMS8</h2>
                  </div>

                  <div class="left-side-product-list" style="width:27%;height:100%;float:left;">
                      <div style="width:100%;height:auto;float:left;text-align:left;margin-left:10px;">
                        <h3>مبلغ : <span>۱۲۳,۱۲۳,۱۲۳</span></h3>
                        <h3>تخفیف : <span>۱۲۳,۱۲۳,۱۲۳</span></h3>
                        <h3>تعداد : <span>۲</span></h3>
                      </div>
                  </div>
            </div>



                      <div class="base-product-list" style="width:90%;height:150px;margin:5px auto;display:block;border-bottom:1px solid gray;">
                            <div class="right-side-product-list cursor-pointer" style="width:73%;height:100%;float:right;">
                                      <div class="product-picture-style cursor-pointer" style="width:120px;height:120px;border-radius:10px;float:right;margin:15px 1.50% 2% 0%;">
                                        <img class="unselectable" src="../assets/img/p-images/p100.jpg" alt="" href="" style="width:100%;height:100%;z-index:0;"/>
                                        <h2 class="unselectable" style="color:red;z-index:20px;position:absolute;margin-top:-30px;margin-right:95px;">۰۶</h2>
                                      </div>
                                      <h2 class="title-product" style="width:69%;float:right;margin-right:10px;word-wrap: break-word;text-align:right;">میکروفن داینامیک شور مدل Shure SMS8 میکروفن داینامیک شور مدل Shure SMS8 میکروفن داینامیک شور مدل Shure SMS8</h2>
                            </div>

                            <div class="left-side-product-list" style="width:27%;height:100%;float:left;">
                                <div style="width:100%;height:auto;float:left;text-align:left;margin-left:10px;">
                                  <h3>مبلغ : <span>۱۲۳,۱۲۳,۱۲۳</span></h3>
                                  <h3>تخفیف : <span>۱۲۳,۱۲۳,۱۲۳</span></h3>
                                  <h3>تعداد : <span>۲</span></h3>
                                </div>
                            </div>
                      </div>
                      <div class="base-product-list" style="width:90%;height:150px;margin:5px auto;display:block;border-bottom:1px solid gray;">
                            <div class="right-side-product-list cursor-pointer" style="width:73%;height:100%;float:right;">
                                      <div class="product-picture-style cursor-pointer" style="width:120px;height:120px;border-radius:10px;float:right;margin:15px 1.50% 2% 0%;">
                                        <img class="unselectable" src="../assets/img/p-images/p100.jpg" alt="" href="" style="width:100%;height:100%;z-index:0;"/>
                                        <h2 class="unselectable" style="color:red;z-index:20px;position:absolute;margin-top:-30px;margin-right:95px;">۰۶</h2>
                                      </div>
                                      <h2 class="title-product" style="width:69%;float:right;margin-right:10px;word-wrap: break-word;text-align:right;">میکروفن داینامیک شور مدل Shure SMS8 میکروفن داینامیک شور مدل Shure SMS8 میکروفن داینامیک شور مدل Shure SMS8</h2>
                            </div>

                            <div class="left-side-product-list" style="width:27%;height:100%;float:left;">
                                <div style="width:100%;height:auto;float:left;text-align:left;margin-left:10px;">
                                  <h3>مبلغ : <span>۱۲۳,۱۲۳,۱۲۳</span></h3>
                                  <h3>تخفیف : <span>۱۲۳,۱۲۳,۱۲۳</span></h3>
                                  <h3>تعداد : <span>۲</span></h3>
                                </div>
                            </div>
                      </div>
                      <div class="base-product-list" style="width:90%;height:150px;margin:5px auto;display:block;border-bottom:1px solid gray;">
                            <div class="right-side-product-list cursor-pointer" style="width:73%;height:100%;float:right;">
                                      <div class="product-picture-style cursor-pointer" style="width:120px;height:120px;border-radius:10px;float:right;margin:15px 1.50% 2% 0%;">
                                        <img class="unselectable" src="../assets/img/p-images/p100.jpg" alt="" href="" style="width:100%;height:100%;z-index:0;"/>
                                        <h2 class="unselectable" style="color:red;z-index:20px;position:absolute;margin-top:-30px;margin-right:95px;">۰۶</h2>
                                      </div>
                                      <h2 class="title-product" style="width:69%;float:right;margin-right:10px;word-wrap: break-word;text-align:right;">میکروفن داینامیک شور مدل Shure SMS8 میکروفن داینامیک شور مدل Shure SMS8 میکروفن داینامیک شور مدل Shure SMS8</h2>
                            </div>

                            <div class="left-side-product-list" style="width:27%;height:100%;float:left;">
                                <div style="width:100%;height:auto;float:left;text-align:left;margin-left:10px;">
                                  <h3>مبلغ : <span>۱۲۳,۱۲۳,۱۲۳</span></h3>
                                  <h3>تخفیف : <span>۱۲۳,۱۲۳,۱۲۳</span></h3>
                                  <h3>تعداد : <span>۲</span></h3>
                                </div>
                            </div>
                      </div>




            <div id="buttons-base" style="width:90%;height:50px;margin:30px auto;">
                <div id="button-cancel-on-awaiting-payment" class="button-style unselectable cursor-pointer" style="float:left;width:25%;height:100%;text-align:center;border:1px solid red;color:red;border-radius:5px;">
                  <h2 style="margin-top:10px;">لغو سفارش</h2>
                </div>

                <div id="button-pay-on-awaiting-payment" class="button-style unselectable cursor-pointer" style="float:right;width:25%;height:100%;text-align:center;border:1px solid green;color:green;border-radius:5px;">
                  <h2 style="margin-top:10px;">پرداخت</h2>
                </div>

                <!-- <div id="button-cancel-on-working-on" class="button-style unselectable cursor-pointer" style="margin:0px auto;width:25%;height:100%;text-align:center;border:1px solid red;color:red;border-radius:5px;">
                  <h2 style="margin-top:10px;">لغو سفارش</h2>
                </div> -->

            </div>

          </div>


        </div>

    </div>

  </body>
</html>
