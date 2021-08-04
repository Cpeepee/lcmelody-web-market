<?php require ('./includes/the-security.php'); ?>
<?php include ('./includes/the-header.php');?>
<title>ورود مدیر - ال سی ملودی</title>
<link rel="stylesheet" href="./assets/css/login.css">
<?php include ('./includes/the-close-head.php');?>
<?php include ('./includes/the-banner.php'); ?>

<?php
       $target = $_GET['target'];
       $place = $_GET['place'];
       $id = $_GET['id'];
?>
    <div id='main-layer'>
      <br/>
      <br/>
      <br/>
      <center>
          <form action="./actions/a-upload-file.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="t" value="<?php echo $target;?>">
                <input type="hidden" name="i" value="<?php echo $id;?>">
                <input type="hidden" name="p" value="<?php echo $place;?>">
                <h1 class='set-the-font'>فایل مورد نظر را انتخاب کنید</h1>
                <br/>
                <input class='text-inputs' type="file" name="uploaded_file" style="text-align: center;">
                <br/><br/>
            <input class='buttons set-the-font' type="submit" value="بارگذاری">
          </form>
          <br/>
          <br/>
        </center>
    </div>
  </body>
</html>
