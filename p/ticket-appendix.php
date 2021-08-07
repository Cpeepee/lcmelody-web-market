<?php require ('../includes/security.php'); ?>
<?php include ('../includes/header.php');?>
<title>افزودن ضمیمه - ال سی ملودی</title>
<link rel="stylesheet" href="../admin/assets/css/login.css">
<?php include ('../includes/close-head.php');?>
<?php include ('../includes/menu.php');?>

<div id='main-layer' class="set-the-font">
  <br/>
  <center>
          <h1>افزودن ضمیمه</h1>
          <?php
          $tmid = $_GET['id'];
          if ($tmid== "")
          {
            show_result("error","لطفا مقادیر معتبر را وارد کنید","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
          }
          ?>
              <section id="section-pictures">
                <div class="divider-base-pictures">
                    <h2 class="text-upload-pictures">ضمیمه یک</h2>
                    <button type="button" onclick="window.open('upload-file.php?id=<?php echo $tmid;?>');">انتخاب</button>
                </div>
                <br/>
                <div class="divider-base-pictures">
                    <h2 class="text-upload-pictures">ضمیمه دو</h2>
                    <button type="button" onclick="window.open('upload-file.php?id=<?php echo $tmid;?>');">انتخاب</button>
                </div>
                <br/>

                <div class="divider-base-pictures">
                    <h2 class="text-upload-pictures">ضمیمه سه</h2>
                    <button type="button" onclick="window.open('upload-file.php?id=<?php echo $tmid;?>');">انتخاب</button>
                </div>
                <br/>

                <div class="divider-base-pictures">
                    <h2 class="text-upload-pictures">ضمیمه چهار</h2>
                    <button type="button" onclick="window.open('upload-file.php?id=<?php echo $tmid;?>');">انتخاب</button>
                </div>
              </section>
    </div>
  </body>
</html>
