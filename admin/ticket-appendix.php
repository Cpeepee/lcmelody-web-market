<?php require ('./includes/the-security.php'); ?>
<?php include ('./includes/the-header.php');?>
<title>افزودن ضمیمه - ال سی ملودی</title>
<link rel="stylesheet" href="./assets/css/login.css">
<?php include ('./includes/the-close-head.php');?>
<?php include ('./includes/the-banner.php'); ?>
<div id='main-layer' class="set-the-font">
  <br/>
  <center>
          <h1>افزودن ضمیمه</h1>

          <?php
          $tid = $_GET['tid'];

          ?>
              <section id="section-pictures">
                <div class="divider-base-pictures">
                    <h2 class="text-upload-pictures">ضمیمه یک</h2>
                    <button type="button" onclick="window.open('upload-file.php?target=ap&id=<?php echo $tid;?>&place=1');">انتخاب</button>
                </div>
                <br/>
                <div class="divider-base-pictures">
                    <h2 class="text-upload-pictures">ضمیمه دو</h2>
                    <button type="button" onclick="window.open('upload-file.php?target=ap&id=<?php echo $tid;?>&place=2');">انتخاب</button>
                </div>
                <br/>

                <div class="divider-base-pictures">
                    <h2 class="text-upload-pictures">ضمیمه سه</h2>
                    <button type="button" onclick="window.open('upload-file.php?target=ap&id=<?php echo $tid;?>&place=3');">انتخاب</button>
                </div>
                <br/>

                <div class="divider-base-pictures">
                    <h2 class="text-upload-pictures">ضمیمه چهار</h2>
                    <button type="button" onclick="window.open('upload-file.php?target=ap&id=<?php echo $tid;?>&place=4');">انتخاب</button>
                </div>
              </section>
    </div>
  </body>
</html>
