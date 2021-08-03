<?php require './actions/includes/header.php';?>
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
                <form action="./actions/sad.php" method="POST">


                    <section id="left-side" class="sides-style">
                      <div class="divider-inputs">
                        <h2 class="labels-style floatright">تاریخ ثبت سفارش</h2>
                        <input id="order-registration-date" class="inputs-style inputs-small-style dirltr" type="text" value="<?php echo $o_date;?>" name="aabbcc">
                      </div>
                      <br/>
                    </section>


                </div>
            </section>
          <br/>

          <div id="base-buttons">
            <input id="button-save-order-edits" class="button-style cursor-pointer" type="submit" value="ذخیره تغییرات"></input>
          </form>
          </div>

        </section>


      </div>
    </div>


  </body>
</html>
