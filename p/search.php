<?php
    // require ('../includes/security.php');
    include ('../includes/header.php');






            $servername = "localhost";
            $username = "me";
            $password = "amx";
            $dbname = "lc3";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error)
            {
              show_result("error","خطا در ارتباط با پایگاه داده","","","Database Error","current");
            }

            $searched = $_GET['searched'];

?>

    <title>فروشگاه ال سی ملودی</title>
    <link rel="stylesheet" href="../assets/css/search.css">
<?php
    include ('../includes/close-head.php');
    include ('../includes/banner.php');
    include ('../includes/menu.php');
?>





<div id="offer-a">
  <h2 class="title-offer-a-b set-the-font">نتیجه جستجو</h2>
  <div class="base-sepcial-product-a-b">

<?php
//fetch info
$fetch_product_info = "SELECT p_id,p_title,p_amount,p_discount,p_price,p_summary_desc,p_description FROM t_product WHERE `p_title` LIKE '%$searched%' OR `p_brand` LIKE '%$searched%' OR `p_model` OR `p_type` LIKE '%$searched%' OR LIKE '%$searched%' OR `p_description`
    LIKE '%$searched%' OR `p_summary_desc` LIKE '%$searched%' ORDER BY `p_amount` DESC;";

$result_pro_info = $conn->query($fetch_product_info);
if ($result_pro_info->num_rows > 0)
{
  while($row = $result_pro_info->fetch_assoc())
  {
        $pid = $row['p_id'];
        $pTitle = $row['p_title'];
        $pAmount = $row['p_amount'];
        $pPrice = $row['p_price'];
        $pDiscount = $row['p_discount'];
        ?>

                    <div class="product-style  unselectable">
                        <div class="product-one-titles-box">
                            <img class="product-picture" src="../assets/img/p-images/p1-a.jpg" alt="product-image"/>
                            <h2 class="product-title"> میکروفن داینامیک شور Shure SM-fifty sixShure SSM-fifty sixM-fifty</h2>
                        </div>
                        <div class="product-detials-box">
                            <h3 class="unit-no-offer-and-counter set-the-font">تومان</h3>
                            <h2 class="product-price-no-offer-and-counter set-the-font">۹۹,۹۹۹,۹۹۹</h2>
                        </div>
                    </div>

                    <div class="product-style  unselectable">
                        <div class="product-one-titles-box">
                            <img class="product-picture" src="../assets/img/p-images/p2000.jpg" alt="product-image"/>
                            <h2 class="product-title"> Shure SM-fifty Shure SM- fifty sixShure SSM-fifty sixM-fifty  SSM-fifty sixM-fifty SSM-fifty sixM-fifty</h2>
                        </div>
                        <div class="product-detials-box">
                          <h3 class="product-is-unavailable set-the-font">ناموجود</h3>
                        </div>
                    </div>


                    <div class="product-style  unselectable">
                        <div class="product-one-titles-box">
                          <img class="product-picture" src="../assets/img/p-images/p1000.jpg" alt="product-image"/>
                            <h2 class="product-title"> میکروفن داینامیک شور Shure SM-fifty sixShure SSM-fifty sixM-fifty</h2>
                        </div>
                        <div class="product-detials-box">
                            <div class="product-discount-box">
                              <h3 class="product-discount-number set-the-font"><center>۱۲<span class="percentage-symbol">٪</span></center></h3>
                            </div>
                            <h3 class="product-discount-priced set-the-font"><del>۹۹,۹۹۹,۹۹۹</del></h3>
                            <h3 class="unit-with-offer-and-counter set-the-font">تومان</h3>
                            <h2 class="product-price-with-offer-and-counter set-the-font">۹۹,۹۹۹,۹۹۹</h2>
                            <h3 class="product-counter-with-offer set-the-font"><span>۵</span> عدد باقی مانده</h3>
                        </div>
                    </div>


        <?php
  }
}
else
    show_result("error","failed to load product information","","","Lc Melody","current");


?>

  </div>
</div>
