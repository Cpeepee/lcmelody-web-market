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
              $sql_search = "SELECT cc_c_id,cc_p_id,cc_text FROM t_comment_confirm WHERE cc_text LIKE '%$searched%' OR cc_c_id LIKE '%$searched%' OR cc_p_id LIKE '%$searched%';";
              if ($conn->query($sql_search) === TRUE)
              {
                   ?>

                   <div class="style-result-user make-center-content">
                       <h3 class="text-style">متن :
                         <span><?php echo $row['cc_text'];?></span>
                       </h3>
                       <div class="style-button-confirm button-edit-style def-border cursor-pointer unselectable make-center-content" onclick="window.open('./a-comfirm-comment.php?cid=<?php echo $row['cc_c_id'];?>&pid=<?php echo $row['cc_p_id']?>');">
                         <h3>تایید</h3>
                       </div>
                       <div class="style-button-delete button-edit-style def-border cursor-pointer unselectable make-center-content" onclick="window.open('./a-delete-comment.php?cid=<?php echo $row['cc_c_id'];?>&pid=<?php echo $row['cc_p_id']?>&t=comfirm');">
                         <h3>حذف</h3>
                       </div>
                   </div>

                   <?php
              }
              else
              {
                   $te = convert_error_2str($conn->error);
                   show_result("error","$te","","","Lc Melody","current");
              }




              //fetch from verified
              $sql_search2 = "SELECT cv_c_id,cv_p_id,cv_text FROM t_comment_verified WHERE cv_text LIKE '%$searched%' OR cv_c_id LIKE '%$searched%' OR cv_p_id LIKE '%$searched%';";
              if ($conn->query($sql_search2) === TRUE)
              {
                   ?>

                   <div class="style-result-user make-center-content">
                       <h3 class="text-style">متن :
                         <span><?php echo $row['cv_text'];?></span>
                       </h3>
                       <div class="style-button-confirm button-edit-style def-border cursor-pointer unselectable make-center-content" onclick="window.open('./a-comfirm-comment.php?cid=<?php echo $row['cv_c_id'];?>&pid=<?php echo $row['cv_p_id']?>');">
                         <h3>تایید</h3>
                       </div>
                       <div class="style-button-delete button-edit-style def-border cursor-pointer unselectable make-center-content" onclick="window.open('./a-delete-comment.php?cid=<?php echo $row['cv_c_id'];?>&pid=<?php echo $row['cv_p_id']?>&t=verified');">
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
<?php require "./includes/footer.php";?>
