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
        <section id="parrent-section-style">
              <div id="buttons-divider">
                <form action="./actions/a-order.php" method="post">

                    <section id="right-side" class="sides-style">
                      <h2 class="labels-style">شناسه سفارش<span id="order-id" class="second-label-style">۱۲۳۴</span></h2>
                      <div class="divider-inputs">
                        <h2 class="labels-style floatright">وضعیت سفارش</h2>
                          <select id="order-status" class="combobox-style" name="order-status">
                            <option value="3">در انتظار پرداخت</option>
                            <option value="2">درحال پردازش</option>
                            <option value="1">تحویل شده</option>
                            <option value="0">لغو شده</option>
                          </select>
                      </div>


                      <br/>
                      <div class="divider-inputs">
                         <h2 class="labels-style floatright">وضعیت پرداخت</h2>
                         <select id="payment-status" class="combobox-style" name="payment-status">
                           <option value="1">انجام شده</option>
                           <option value="0">انجام نشده است</option>
                         </select>
                      </div>
                      <br/>
                      <div class="divider-inputs">
                         <h2 class="labels-style floatright">هزینه پست</h2>
                         <input id="order-post-price" class="inputs-style inputs-small-style dirltr" type="text" value="" name="post-price">
                      </div>
                      <br/>
                      <div class="divider-inputs">
                         <h2 class="labels-style floatright">کد پیگیری پرداخت</h2>
                         <input id="order-payment-tracking-code" class="inputs-style inputs-small-style dirltr" type="text" value="" name="payment-tracking-code">
                      </div>
                    </section>




                    <section id="left-side" class="sides-style">
                      <div class="divider-inputs">
                        <h2 class="labels-style floatright">تاریخ ثبت سفارش</h2>
                        <input id="order-registration-date" class="inputs-style inputs-small-style dirltr" type="text" value="۱۴۰۰/۱۲/۱۲" name="order-submited-date">
                      </div>
                      <br/>
                      <div class="divider-inputs">
                        <h2 class="labels-style floatright">مبلغ کل سفارش</h2>
                        <input id="order-total-price" class="inputs-style inputs-small-style dirltr" type="text" value="۱۲۳,۴۵۶,۷۸۹">
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
