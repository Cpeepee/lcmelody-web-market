<?php
    // require ('../includes/security.php');
    include ('../includes/header.php');
?>
    <title>فروشگاه ال سی ملودی</title>
    <link rel="stylesheet" href="../assets/css/home.css">
<?php
    include ('../includes/close-head.php');
    include ('../includes/banner.php');
    include ('../includes/menu.php');
?>




<?php
  $servername = "localhost";
  $username = "me";
  $password = "amx";
  $dbname = "lc3";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error)
  {
    show_result("error","خطا در ارتباط با پایگاه داده","","","Database Error","current");
  }

  //fetch special product ids from banner
  $special_products = "SELECT special_product_a,special_product_b,special_product_c,special_product_d,special_product_e,special_product_f FROM t_banners;";
  $result_search_special_products = $conn->query($special_products);
  if ($result_search_special_products->num_rows > 0)
  {
    while($row = $result_search_special_products->fetch_assoc())
    {
        $special_a = $row['special_product_a'];
        $special_b = $row['special_product_b'];
        $special_c = $row['special_product_c'];
        $special_d = $row['special_product_d'];
        $special_e = $row['special_product_e'];
        $special_f = $row['special_product_f'];
    }
  }
  else
    show_result("error","error while loading special items","","","Lc Melody","current");


?>


<div id="offer-a">
  <h2 class="title-offer-a-b set-the-font">پرفروش هفته</h2>

  <div class="base-sepcial-product-a-b">
    <?php

    function load_special_product($special)
    {
      //fetch product info
      $special_products = "SELECT p_title,p_price,p_amount,p_discount FROM t_product WHERE `p_id`='$special';";
      $result_search_special_products = $conn->query($special_products);
      if ($result_search_special_products->num_rows > 0)
      {
        while($row = $result_search_special_products->fetch_assoc())
        {

            ?>
            <div class="product-style  unselectable">
                <div class="product-one-titles-box">
                  <img class="product-picture" src="../assets/img/p-images/<?php echo $special_a;?>-a.jpg" alt="product-image"/>
                    <h2 class="product-title"><?php echo $row['p_title'];?></h2>
                </div>
                <div class="product-detials-box">
                    <?php
                      if($row['p_amount'] ==0 || $row['p_amount'] =="0")
                      {
                        ?>
                        <h3 class="product-is-unavailable set-the-font">ناموجود</h3>
                        <?php
                      }
                      else
                      {aa
                        ?>
                        <h3 class="product-discount-priced set-the-font"><del><?php echo $row['p_discount'];?></del></h3>
                        <h3 class="unit-with-offer-and-counter set-the-font">تومان</h3>
                        <?php
                      }
                    ?>

                    <h2 class="product-price-with-offer-and-counter set-the-font"><?php echo $row['p_price'];?>۹,۹۹۹,۹۹۹</h2>
                    <?php
                    if($row['p_amount']<= 9)
                    {
                      ?>
                      <h3 class="product-counter-with-offer set-the-font"><span><?php echo $row['p_amount'];?></span> عدد باقی مانده</h3>
                      <?php
                    }
                    ?>
                </div>
            </div>
            <?php
        }
      }
      else
        show_result("error","error while loading special items","","","Lc Melody","current");

    }

    ?>
    <div class="product-style  unselectable"  onclick="window.location.href='product.php'">
        <div class="product-one-titles-box">
            <img class="product-picture" src="../assets/img/p-images/p300.jpg" alt="product-image"/>
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
            <!-- <div class="product-discount-box">
              <h3 class="product-discount-number set-the-font"><center>۱۲<span class="percentage-symbol">٪</span></center></h3>
            </div> -->
            <h3 class="product-discount-priced set-the-font"><del>۹۹,۹۹۹,۹۹۹</del></h3>
            <h3 class="unit-with-offer-and-counter set-the-font">تومان</h3>
            <h2 class="product-price-with-offer-and-counter set-the-font">۹۹,۹۹۹,۹۹۹</h2>
            <h3 class="product-counter-with-offer set-the-font"><span>۵</span> عدد باقی مانده</h3>
        </div>
    </div>



  </div>
</div>


<div id="offer-b" style="display:block;margin-left:auto;margin-right:auto; background-color:transparent;width:85%;height:465px;border:1px solid gray;border-radius:15px;margin-top:35px;">
  <h2 class="title-offer-a-b set-the-font" style="font-size:35px;height:10px;margin-top:20px;margin-right:5%;">لوازم جانبی های پرفروش</h2>

  <div class="base-sepcial-product-a-b">

    <div class="product-style  unselectable">
      <div class="product-one-titles-box">
        <img class="product-picture" src="../assets/img/p-images/p300.jpg" alt="product-image"/>
        <h2 class="product-title"> میکروفن داینامیک شور Shure SM-fifty sixShure SSM-fifty sixM-fifty</h2>
      </div>
        <div class="product-detials-box">
            <h3 class="unit-no-offer-with-counter set-the-font">تومان</h3>
            <h2 class="product-price-no-offer-with-counter set-the-font">۹۹,۹۹۹</h2>
            <h3 class="product-counter-no-offer set-the-font"><span id="remaining-amoun">۵</span> عدد باقی مانده</h3>
        </div>
    </div>

    <div class="product-style  unselectable">
        <div class="product-one-titles-box">
            <img class="product-picture" src="../assets/img/p-images/p100.jpg" alt="product-image"/>
            <h2 class="product-title"> Shure SM-fifty Shure SM- fifty sixShure SSM-fifty sixM-fifty</h2>
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
            <!-- <div class="product-discount-box">
              <h3 class="product-discount-number set-the-font"><center>۱۲<span class="percentage-symbol">٪</span></center></h3>
            </div> -->
            <h3 class="product-discount-priced set-the-font"><del>۹۹,۹۹۹,۹۹۹</del></h3>
            <h3 class="unit-no-counter-with-offer set-the-font">تومان</h3>
            <h2 class="product-price-no-counter-with-offer set-the-font">۹۹,۹۹۹,۹۹۹</h2>
        </div>
    </div>
  </div>
</div>
<?php
function show_result($mode="error",$text="result text",$button="",$target="",$title="LC Melody",$window="current")
{
    if($window=="new")
    {
      ?>
        <script>
            window.open('http://localhost/lc/p/result.php?mode=<?php echo $mode;?>&text=<?php echo $text;?>&button=<?php echo $button;?>&target=<?php echo $target;?>&title=<?php echo $title;?>');
        </script>
      <?php
    }
    else
    {
    ?>
        <script>
            window.location=('http://localhost/lc/p/result.php?mode=<?php echo $mode;?>&text=<?php echo $text;?>&button=<?php echo $button;?>&target=<?php echo $target;?>&title=<?php echo $title;?>');
        </script>
     <?php
    }
}
?>
<?php include ('../includes/footer.php'); ?>
