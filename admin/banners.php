<?php require './actions/includes/header.php';?>
<?php include ('./includes/the-header.php');?>
<title>ویرایش بنر  - ال سی ملودی</title>
<link rel="stylesheet" href="./assets/css/banners.css">
<?php include ('./includes/the-close-head.php');?>
<?php include ('./includes/the-banner.php'); ?>

    <div id='main-layer'>
      <?php include('./includes/the-menu.php'); ?>
      <div id="base-banner-edit" class="def-border set-two-font">

        <section>

            <div class="upload-image-input-styles">
              <h2 class="upload-banner-label-style">انتخاب تصویر بنر بالا</h2>
              <button type="button"  id="top-banner-upload" onclick="window.open('upload-file.php?target=b&id=0&place=0');">browse</button>
            </div>
        </section>

        <?php
        //fetch special products
        $sql_search = "SELECT  special_product_a,special_product_b,special_product_c,special_product_d,special_product_e,special_product_f FROM t_banners WHERE b_id='0';";
        $result_search = $conn->query($sql_search);
        if ($result_search->num_rows > 0)
        {
          while($row = $result_search->fetch_assoc())
          {

                 $spcial_a = $row['special_product_a'];
                 $spcial_b = $row['special_product_b'];
                 $spcial_c = $row['special_product_c'];
                 $spcial_d = $row['special_product_d'];
                 $spcial_e = $row['special_product_e'];
                 $spcial_f = $row['special_product_f'];
          }
        }
        else
        {
          $te = convert_error_2str($conn->error);
          show_result("error","خطا در بارگیری شناسه محصولات ویژه <br/>.$te","","","Lc Melody","current");
        }
        ?>
        <form action="./actions/a-banner.php" method="POST">
        <section id="section-special-sell-product-inputs">
            <div class="special-product-style">
              <h2 class="text-sepcial-product-style">شناسه محصول ویژه <span>یک</span></h2>
                <input type="text" class="input-product-id-style" name="product-special-1" value="<?php echo $spcial_a;?>" maxlength="4" placeholder="2">
            </div>

            <div class="special-product-style">
              <h2 class="text-sepcial-product-style">شناسه محصول ویژه <span>دو</span></h2>
                <input type="text" class="input-product-id-style" name="product-special-2" value="<?php echo $spcial_b;?>" maxlength="4"  placeholder="3">
            </div>

            <div class="special-product-style">
              <h2 class="text-sepcial-product-style">شناسه محصول ویژه <span>سه</span></h2>
                <input type="text" class="input-product-id-style" name="product-special-3" value="<?php echo $spcial_c;?>" maxlength="4"  placeholder="6">
            </div>

            <div class="special-product-style">
              <h2 class="text-sepcial-product-style">شناسه محصول ویژه <span>چهار</span></h2>
                <input type="text" class="input-product-id-style" name="product-special-4" value="<?php echo $spcial_d;?>" maxlength="4"  placeholder="16">
            </div>

            <div class="special-product-style">
              <h2 class="text-sepcial-product-style">شناسه محصول ویژه <span>پنج</span></h2>
                <input type="text" class="input-product-id-style" name="product-special-5" value="<?php echo $spcial_e;?>" maxlength="4"  placeholder="80">
            </div>

            <div class="special-product-style">
              <h2 class="text-sepcial-product-style">شناسه محصول ویژه <span>شش</span></h2>
              <input type="text" class="input-product-id-style" name="product-special-6" value="<?php echo $spcial_f;?>" maxlength="4"  placeholder="23">
            </div>
        </section>

        <input type="submit" id="button-save-banners-edits" class="cursor-pointer"  value="ذخیره تغییرات">
      </form>
      </div>
    </div>


  </body>
</html>
<?php
require './actions/includes/footer.php';
?>
