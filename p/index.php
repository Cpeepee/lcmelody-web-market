<?php
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
  $spec_sec_a = array();
  $spec_sec_b = array();
  $id_specials = "SELECT special_product_a,special_product_b,special_product_c,special_product_d,special_product_e,special_product_f FROM t_banners WHERE `b_id`='0';";
  $result_id_sepcials = $conn->query($id_specials);
  if ($result_id_sepcials->num_rows > 0)
  {
    while($row = $result_id_sepcials->fetch_assoc())
    {
        array_push($spec_sec_a,$row['special_product_a'],$row['special_product_b'],$row['special_product_c']);
        array_push($spec_sec_b,$row['special_product_d'],$row['special_product_e'],$row['special_product_f']);
    }
  }
  else
    show_result("error","error while loading special items","","","Lc Melody","current");

?>




<div id="offer-a">
  <h2 class="title-offer-a-b set-the-font">پرفروش هفته</h2>

  <div class="base-sepcial-product-a-b">
    <?php

      foreach ($spec_sec_a as $value)
      {
        //fetch info
        $value = (int)$value;
        $fetch_product_info = "SELECT p_title,p_amount,p_discount,p_price FROM t_product WHERE `p_id`='$value';";

        $result_pro_info = $conn->query($fetch_product_info);
        if ($result_pro_info->num_rows > 0)
        {
          while($row = $result_pro_info->fetch_assoc())
          {
                $pPrice = $row['p_price'];
                $pDiscount = $row['p_discount'];


                $row['p_amount'] = (int)$row['p_amount'];
                ?>
                <div class="product-style unselectable" onclick="window.open('product.php?id=<?php echo $value;?>')">
                    <div class="product-one-titles-box">
                        <img class="product-picture" src="../assets/img/p-images/<?php echo $value;?>-a.jpg" alt="product-image"/>
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
          }
        }
        else
            show_result("error","failed to load product information","","","Lc Melody","current");

      }


    ?>


  </div>
</div>


<div id="offer-b" style="display:block;margin-left:auto;margin-right:auto; background-color:transparent;width:85%;height:465px;border:1px solid gray;border-radius:15px;margin-top:35px;">
  <h2 class="title-offer-a-b set-the-font" style="font-size:35px;height:10px;margin-top:20px;margin-right:5%;">لوازم جانبی های پرفروش</h2>

  <div class="base-sepcial-product-a-b">

    <?php

    foreach ($spec_sec_b as $value)
    {
      //fetch info
      $value = (int)$value;
      $fetch_product_info = "SELECT p_title,p_amount,p_discount,p_price FROM t_product WHERE `p_id`='$value';";

      $result_pro_info = $conn->query($fetch_product_info);
      if ($result_pro_info->num_rows > 0)
      {
        while($row = $result_pro_info->fetch_assoc())
        {
              $pPrice = $row['p_price'];
              $pDiscount = $row['p_discount'];


              $row['p_amount'] = (int)$row['p_amount'];
              ?>
              <div class="product-style unselectable" onclick="window.open('product.php?id=<?php echo $value;?>')">
                  <div class="product-one-titles-box">
                      <img class="product-picture" src="../assets/img/p-images/<?php echo $value;?>-a.jpg" alt="product-image"/>
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
        }
      }
      else
          show_result("error","failed to load product information","","","Lc Melody","current");

    }

    ?>



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
