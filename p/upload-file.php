<?php require ('../includes/security.php'); ?>
<?php include ('../includes/header.php');?>
<title>بارگذاری فایل - ال سی ملودی</title>
<link rel="stylesheet" href="../admin/assets/css/login.css">
<?php include ('../includes/close-head.php');?>
<?php include ('../includes/menu.php');?>

<?php
       $id = $_GET['id'];

       if ($id== "")
       {
         show_result("error","لطفا مقادیر معتبر را وارد کنید","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
       }
?>
    <div id='main-layer'>
      <br/>
      <br/>
      <br/>
      <center>
          <form action="./actions/a-upload-file.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="i" value="<?php echo $id;?>">
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
