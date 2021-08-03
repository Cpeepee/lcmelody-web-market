<?php require "./includes/header.php";?>

<!-- the-header -->
<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="../../assets/img/icons/fav.png"/>
    <link rel="stylesheet" href="../assets/css/header.css">



<title>نتیجه جستجو - ال سی ملودی</title>
<link rel="stylesheet" href="../assets/css/search-user-result.css">
<?php include ('../includes/the-close-head.php');?>

    <!-- banner -->
    <img id="banner" class="unselectable" src='../assets/img/header.jpg' alt='banner'/>
      <br/>


    <div id='main-layer'>
      <?php include('../includes/the-menu.php'); ?>
      <div id="base" class="def-border set-two-font">
          <div id="base-search-user">
              <h1>نتیجه جستجو نظرها</h1>


<?php
$searched = $_POST['q'];
$searched = strtolower($searched);

// $sql_search_cc = "SELECT  cc_c_id,a_email FROM t_admin WHERE a_email LIKE '%$searched%' OR a_id LIKE '%$searched%';";


//fetch Comment Confirm
$sql_search_cc = "SELECT cc_c_id,cc_p_id,cc_text FROM t_comment_confirm WHERE cc_text LIKE '%$searched%' OR cc_c_id LIKE '%$searched%' OR cc_p_id LIKE '%$searched%';";
$result_search_cc = $conn->query($sql_search_cc);
if ($result_search_cc->num_rows > 0)
{
  while($row = $result_search_cc->fetch_assoc())
  {
    ?>
          <div class="style-result-user make-center-content">
              <h3 class="text-style">متن :
                <span><?php echo $row['cc_text'];?></span>
              </h3>
              <div class="style-button-confirm button-edit-style def-border cursor-pointer unselectable make-center-content" onclick="window.open('./a-confirm-comment.php?cid=<?php echo $row['cc_c_id'];?>&pid=<?php echo $row['cc_p_id']?>');">
                <h3>تایید</h3>
              </div>
              <div class="style-button-delete button-edit-style def-border cursor-pointer unselectable make-center-content" onclick="window.open('./a-delete-comment.php?cid=<?php echo $row['cc_c_id'];?>&pid=<?php echo $row['cc_p_id']?>&t=confirm');">
                <h3>حذف</h3>
              </div>
          </div>
    <?php
  }
}





//fetch Comment Verified
$sql_search_cv = "SELECT cv_c_id,cv_p_id,cv_text FROM t_comment_verified WHERE cv_text LIKE '%$searched%' OR cv_c_id LIKE '%$searched%' OR cv_p_id LIKE '%$searched%';";
$result_search_cv = $conn->query($sql_search_cv);
if ($result_search_cv->num_rows > 0)
{
  while($row = $result_search_cv->fetch_assoc())
  {
    ?>
          <div class="style-result-user make-center-content">
              <h3 class="text-style">متن :
                <span><?php echo $row['cv_text'];?></span>
              </h3>
              <div class="style-button-delete button-edit-style def-border cursor-pointer unselectable make-center-content" onclick="window.open('./a-delete-comment.php?cid=<?php echo $row['cv_c_id'];?>&pid=<?php echo $row['cv_p_id']?>&t=verified');">
                <h3>حذف</h3>
              </div>
          </div>
    <?php
  }
}

 ?>


                 </div>
             </div>
           </div>
         </body>
       </html>


<?php require "./includes/footer.php";?>
