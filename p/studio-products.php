<?php
    include ('../includes/header.php');
    require "../includes/db-connection-without-session.php";


            $searched = $_GET['searched'];

?>

    <title>تجهیزات استودیویی</title>
    <link rel="stylesheet" href="../assets/css/search.css">
<?php
    include ('../includes/close-head.php');
    include ('../includes/banner.php');
    include ('../includes/menu.php');
?>





<div id="offer-a">
  <h2 class="title-offer-a-b set-the-font" style="text-align:center;">تجهیزات استودیویی</h2>
  <div class="base-sepcial-product-a-b">

<?php
//fetch info
$fetch_product_info = "SELECT p_id,p_title,p_amount,p_discount,p_price FROM t_product WHERE `p_type` LIKE '%studio%' OR `p_type` LIKE '%استودیویی%' OR `p_type` LIKE '%استودیو%' ORDER BY `p_amount` DESC;";

$result_pro_info = $conn->query($fetch_product_info);
if ($result_pro_info->num_rows > 0)
{
  while($row = $result_pro_info->fetch_assoc())
  {
        $pPrice = $row['p_price'];
        $pDiscount = $row['p_discount'];


        $row['p_amount'] = (int)$row['p_amount'];
        ?>
        <div class="product-style unselectable" onclick="window.open('product.php?id=<?php echo $row['p_id'];?>')">
            <div class="product-one-titles-box">
                <img class="product-picture" src="../assets/img/p-images/<?php echo $row['p_id'];?>-a.jpg" alt="product-image"/>
                <h2 class="product-title"><?php echo $row['p_title'];?></h2>
            </div>

            <?php
            //check amount
            if($row['p_amount'] == 0 || $row['p_amount'] == "0")
            {
              ?>
              <div class="product-detials-box">
                <h3 class="product-is-unavailable set-the-font">ناموجود</h3>
              </div>
              <?php
            }
            else
            {
              if($row['p_discount'] == 0 || $row['p_discount'] == "0")
              {
                  ?>
                      <div class="product-detials-box">
                          <h3 class="unit-no-offer-and-counter set-the-font">تومان</h3>
                          <h2 class="product-price-no-offer-and-counter set-the-font"><?php echo $row['p_price'];?></h2>
                      </div>
                  <?php
              }
              else
              {
                ?>
                <div class="product-detials-box">
                    <div class="product-discount-box">
                      <?php
                          //count pecent discount
                          $pPrice = str_replace(",","",$pPrice);
                          $pPrice = (int)$pPrice;

                          $pDiscount = str_replace(",","",$pDiscount);
                          $pDiscount = (int)$pDiscount;

                          $count_percent = $pDiscount/$pPrice;
                          $percent_friendly = number_format( $count_percent * 100);
                      ?>
                      <h3 class="product-discount-number set-the-font"><center><?php echo $percent_friendly;?><span class="percentage-symbol">٪</span></center></h3>
                    </div>
                    <h3 class="product-discount-priced set-the-font"><del><?php echo $row['p_price'];?></del></h3>
                    <h3 class="unit-with-offer-and-counter set-the-font">تومان</h3>
                    <?php

                          //count price with discount
                          $final_price = $pPrice - $pDiscount;
                          $final_price = number_format($final_price);

                    ?>
                    <h2 class="product-price-with-offer-and-counter set-the-font"><?php echo $final_price;?></h2>
                    <?php
                    //check last amounts
                    if($row['p_amount'] <= 9)
                    {
                      ?>
                      <h3 class="product-counter-with-offer set-the-font"><span><?php echo $row['p_amount'];?></span> عدد باقی مانده</h3>
                      <?php
                    }
                    ?>
                </div>
                <?php
              }
            }
            ?>

        </div>

        <?php
        ?>



        <?php
  }
}
else
{
  ?>
  <br/>
  <h2 class="set-the-font">محصولی پیدا نشد</h2>
      <?php
}


?>

  </div>
  <br/>
</div>
<br/><br/>
<?php require "./includes/footer.php";
require './actions/includes/footer.php';?>
