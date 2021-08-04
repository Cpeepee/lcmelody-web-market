<?php require "./includes/header.php";?>

<!-- the-header -->
<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="../../assets/img/icons/fav.png"/>
    <link rel="stylesheet" href="../assets/css/header.css">


<title>نتیجه جستجو - ال سی ملودی</title>
<link rel="stylesheet" href="../assets/css/search-customer.css">
<link rel="stylesheet" href="../assets/css/search-product-result.css">

<?php include ('../includes/the-close-head.php');?>

    <!-- banner -->
    <img id="banner" class="unselectable" src='../assets/img/header.jpg' alt='banner'/>
      <br/>

    <div id='main-layer'>
      <?php include('./includes/the-menu.php'); ?>
      <div id="base" class="def-border set-two-font">

        <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->

        <div id="base-total-prices" class="set-two-font">
            <h1>نتیجه جستجوی محصول</h1>
        </div>

<?php
$searched = $_POST['q'];
$searched = strtolower($searched);

$sql_search = "SELECT p_id,p_title,p_price,p_pictures FROM t_product WHERE p_id LIKE '%$searched%' OR p_title LIKE '%$searched%' OR p_description LIKE '%$searched%' OR p_model LIKE '%$searched%' OR p_brand LIKE '%$searched%' OR p_summary_desc LIKE '%$searched%' OR p_price LIKE '%$searched%' OR p_type LIKE '%$searched%';";
$result_search = $conn->query($sql_search);
if ($result_search->num_rows > 0)
{
  while($row = $result_search->fetch_assoc())
  {
    ?>
                  <div class="item-style def-border set-two-font unselectable">
                    <img class="item-picture-style" src="../../assets/img/p-images/<?php echo $row['p_id'];?>-a.jpg" alt="<?php echo $row['p_title'];?>"/>
                    <h2 class="item-title"><?php echo $row['p_title'];?>
                    </h2>
                    <h2 class="item-price set-the-font"><?php echo $row['p_price'];?></h2>
                    <h3 class="item-price-unit">تومان</h3>
                      <div class="cursor-pointer button-remove-style" id="button-remove-x" onclick="window.open('../edit-product.php?id=<?php echo $row['p_id'];?>');">
                        <h2 class="text-button-remove-style">ویرایش</h2>
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
