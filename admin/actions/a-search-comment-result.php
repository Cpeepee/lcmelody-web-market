<?php require "./includes/header.php";?>
<?php include ('../includes/the-header.php');?>
<title>نتیجه جستجو نظرها - ال سی ملودی</title>
<link rel="stylesheet" href="../assets/css/search-comment-result.css">
<?php include ('../includes/the-close-head.php');?>
<?php include ('../includes/the-banner.php'); ?>
    <div id='main-layer'>
      <?php include('../includes/the-menu.php'); ?>
      <div id="base" class="def-border set-two-font">
          <div id="base-search-user">
              <h1>نتیجه جستجو نظرها</h1>

              <?php
              $searched = $_POST['searched'];

              $searched = strtolower($searched);

              //fetch from comfirm
              $sql_search = "SELECT a_id,a_email FROM t_admin WHERE a_id LIKE '%$searched%' OR a_email LIKE '%$searched%';";
              if ($conn->query($sql_search) === TRUE)
              {
                   ?>

                   <div class="style-result-user make-center-content">
                       <h3 class="text-style">متن :
                         <span>
                         </span>
                       </h3>
                       <div class="style-button-confirm button-edit-style def-border cursor-pointer unselectable make-center-content">
                         <h3>تایید</h3>
                       </div>
                       <div class="style-button-delete button-edit-style def-border cursor-pointer unselectable make-center-content">
                         <h3>حذف</h3>
                       </div>
                   </div>

                   <?php
              }
              else
              {
                   $te = convert_error_2str($conn->error);
                   show_result("error","$te","","","Lc Melody","current");
              }?>


          </div>
      </div>
    </div>
  </body>
</html>
