<?php require ('./includes/the-security.php'); ?>
<?php include ('./includes/the-header.php');?>
<title>بارگذاری تصویر محصول - ال سی ملودی</title>
<link rel="stylesheet" href="./assets/css/login.css">
<?php include ('./includes/the-close-head.php');?>
<?php include ('./includes/the-banner.php'); ?>
<div id='main-layer' class="set-the-font">
  <br/>
  <center>
          <h1 style="color:green;">محصول با موفقیت ایجاد شد</h1>
          <h1> تصاویر محصول را انتخاب کنید </h1>

          <?php
          $pid = $_GET['id'];
          if ($pid== "")
          {
            show_result("error","لطفا مقادیر معتبر را وارد کنید","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
          }


          ?>
              <section id="section-pictures">
                <div class="divider-base-pictures">
                    <h2 class="text-upload-pictures"> تصویر یک</h2>
                    <button type="button" onclick="window.open('upload-file.php?target=p&id=<?php echo $pid;?>&place=1');">انتخاب</button>
                </div>
                <br/>
                <div class="divider-base-pictures">
                    <h2 class="text-upload-pictures">تصویر دو</h2>
                    <button type="button" onclick="window.open('upload-file.php?target=p&id=<?php echo $pid;?>&place=2');">انتخاب</button>
                </div>
                <br/>

                <div class="divider-base-pictures">
                    <h2 class="text-upload-pictures">تصویر سه</h2>
                    <button type="button" onclick="window.open('upload-file.php?target=p&id=<?php echo $pid;?>&place=3');">انتخاب</button>
                </div>
                <br/>

                <div class="divider-base-pictures">
                    <h2 class="text-upload-pictures">تصویر چهار</h2>
                    <button type="button" onclick="window.open('upload-file.php?target=p&id=<?php echo $pid;?>&place=4');">انتخاب</button>
                </div>
              </section>
    </div>
  </body>
</html>
