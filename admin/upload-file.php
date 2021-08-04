<?php require ('./includes/the-security.php'); ?>
<?php include ('./includes/the-header.php');?>
<title>ورود مدیر - ال سی ملودی</title>
<link rel="stylesheet" href="./assets/css/login.css">
<?php include ('./includes/the-close-head.php');?>
<?php include ('./includes/the-banner.php'); ?>

target=p
product=pid
place=1


banner: target=b

edit-product:
target=ep
product=pid
place=1


appendix:
target=ap


  <?php
   $id = $_GET['id'];
   $target = $_GET['target'];
   $place = $_GET['place'];

  ?>

    <div id='main-layer'>
      <br/>
      <br/>
      <br/>
      <center>
          <form action="./actions/a-upload-file.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="" value="">
                <input type="hidden" name="" value="">
                <input type="hidden" name="" value="">
                <h1 class='set-the-font'>فایل مورد نظر را انتخاب کنید</h1>
                <br/>
                <input class='text-inputs' type="file" name="selected_file" style="text-align: center;">
                <br/><br/>
            <input class='buttons set-the-font' type="submit" value="بارگذاری">
          </form>
          <br/>
          <br/>
        </center>
    </div>
  </body>
</html>
