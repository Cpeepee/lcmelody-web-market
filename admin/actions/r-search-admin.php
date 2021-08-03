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
              <h1>نتیجه جستجو مدیران</h1>


<?php
$searched = $_POST['q'];
$searched = strtolower($searched);


$sql_search = "SELECT  a_id,a_email FROM t_admin WHERE a_email LIKE '%' OR a_id LIKE '%';";
$result_search = $conn->query($sql_search);
if ($result_search->num_rows > 0)
{
  while($row = $result_search->fetch_assoc())
  {
    ?>
    <div class="style-result-user make-center-content">
        <h3 class="text-style">ایمیل : <span><?php echo $row['a_email'];?></span></h3>
        <h3 class="text-style">شناسه : <span><?php echo $row['a_id'];?></span></h3>
        <div class="button-edit-style def-border cursor-pointer unselectable make-center-content" onclick="window.open('../edit-admin.php?id=<?php echo $row['a_id'];?>');">
          <h3>ویرایش</h3>
        </div>
    </div>
    <?php
  }
}
else
{
  $te = convert_error_2str($conn->error);
  show_result("error","error: $te","","","Lc Melody","current");
}

 ?>


                 </div>
             </div>
           </div>
         </body>
       </html>


<?php require "./includes/footer.php";?>
