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
              <h1>نتیجه جستجو مشتری</h1>


<?php
$searched = $_POST['q'];
$searched = strtolower($searched);


$sql_search = "SELECT c_id,c_FL_name FROM t_customer WHERE c_FL_name LIKE '%$searched%' OR c_id LIKE '%$searched%' OR c_email LIKE '%$searched%' OR c_phonenumer LIKE '%$searched%';";
$result_search = $conn->query($sql_search);
if ($result_search->num_rows > 0)
{
  while($row = $result_search->fetch_assoc())
  {
    ?>
    <div class="style-result-user make-center-content">
        <h3 class="text-style">نام : <span><?php echo $row['c_FL_name'];?></span></h3>
        <h3 class="text-style">شناسه : <span><?php echo $row['c_id'];?></span></h3>
        <div class="button-edit-style def-border cursor-pointer unselectable make-center-content" onclick="window.open('../edit-customer.php?id=<?php echo $row['c_id'];?>');">
          <h3>ویرایش</h3>
        </div>
    </div>
    <?php
  }
}
else
{
  show_result("error","Not Found","","","Lc Melody","current");
}

 ?>


                 </div>
             </div>
           </div>
         </body>
       </html>


<?php require "./includes/footer.php";?>
