<?php require "./includes/header.php";?>
<?php include ('../includes/the-header.php');?>
<title>جستجوی محصول - ال سی ملودی</title>
<link rel="stylesheet" href="../assets/css/search-customer.css">
<link rel="stylesheet" href="../assets/css/search-product-result.css">

<?php include ('../includes/the-close-head.php');?>
<?php include ('../includes/the-banner.php'); ?>



    <div id='main-layer'>
      <?php include('../includes/the-menu.php'); ?>
      <div id="base" class="def-border set-two-font">

        <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->

        <div id="base-total-prices" class="set-two-font">
            <h1>نتیجه جستجوی محصول</h1>
        </div>
        <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
        <?php
        $searched = $_POST['searched'];
        $searched = strtolower($searched);

         $sql_search = "SELECT p_id,p_title,p_price,p_pictures FROM t_product WHERE p_id LIKE '%$searched%' OR p_title LIKE '%$searched%';";
         if ($conn->query($sql_search) === TRUE)
         {
              ?>
              <div id="item-x" class="item-style def-border set-two-font unselectable">
                <img class="item-picture-style" src="../../assets/img/p-images/<?php echo $row['p_id'];?>-a.jpg" alt="<?php echo $row['p_title'];?>"/>
                <h2 class="item-title"><?php echo $row['p_title'];?>
                </h2>
                <h2 class="item-price"><?php echo $row['p_price'];?></h2>
                <h3 class="item-price-unit">تومان</h3>
                  <div class="cursor-pointer button-remove-style" id="button-remove-x" onclick="window.open('../edit-product?id=<?php echo $row['p_id'];?>');">
                    <h2 class="text-button-remove-style">ویرایش</h2>
                  </div>
              </div>
              <?php
         }
         else
         {
              $te = convert_error_2str($conn->error);
              show_result("error","$te","","","Lc Melody","current");
         }?>

        <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
        <br/><br/> <!-- while scrolling down , the menu javascript code have problem (when items are less than 5) this BRs fix this issues (auto scroll to up)-->
        <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
        </div>
    </div>
</body>
</html>
