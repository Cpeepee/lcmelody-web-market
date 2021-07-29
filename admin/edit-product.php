<?php require ('./includes/the-security.php'); ?>
<?php include ('./includes/the-header.php');?>
<title>ویرایش محصول  - ال سی ملودی</title>
<link rel="stylesheet" href="./assets/css/edit-product.css">
<?php include ('./includes/the-close-head.php');?>
<?php include ('./includes/the-banner.php'); ?>

    <div id='main-layer'>
      <?php include('./includes/the-menu.php'); ?>
      <div id="base-edit-product" class="def-border set-two-font">

        <section id="parrent-section-style">
            <h1 style="font-size:35px;margin:15px 2.50%;">ویرایش محصول</h1>
            <div id="buttons-divider">
                  <section id="right-side" class="sides-style">
                    <div class="divider-inputs">
                      <h2 class="labels-style floatright">عنوان محصول</h2>
                      <input id="user-name" class="inputs-style" type="text" value="محمد رضااکبر">
                    </div>
                    <br/>
                    <div class="divider-inputs">
                       <h2 class="labels-style floatright">دسته بندی</h2>
                       <input id="user-family" class="inputs-style" type="text" value="رضایی رضازاده ای">
                    </div>
                    <br/>
                    <div class="divider-inputs">
                       <h2 class="labels-style floatright">تخفیف</h2>
                       <input id="user-password" class="inputs-style dirltr" type="text" value="ABc263+$#@kmoifewH%$IKO34">
                    </div>
                    <br/>
                    <div class="divider-inputs">
                       <h2 class="labels-style floatright">تعداد موجودی</h2>
                       <input id="user-attemps" class="inputs-style dirltr" type="text" value="5">
                    </div>
                    <br/>
                    <div class="divider-inputs">
                       <h2 class="labels-style floatright">اولویت در نمایش</h2>
                       <input id="user-attemps" class="inputs-style dirltr" type="text" value="5">
                    </div>
                    <br/>
                    <div class="divider-inputs">
                       <h2 class="labels-style floatright">نمایش داده شود</h2>
                       <!-- <input id="user-attemps" class="inputs-style dirltr" type="text" value="5"> -->
                       <input id="checkbox-product-active" type="checkbox" name="" value="">
                    </div>
                  </section>


                  <section id="left-side" class="sides-style">
                    <div class="divider-inputs">
                      <h2 class="labels-style floatright">شماره موبایل</h2>
                      <input id="user-phonenumber" class="inputs-style dirltr" type="text" value="09170000000">
                    </div>
                    <br/>
                    <div class="divider-inputs">
                       <h2 class="labels-style floatright">پست الکترونیک</h2>
                       <input id="user-email" class="inputs-style dirltr" type="text" value="some@some.some">
                    </div>
                    <br/>
                    <div class="divider-inputs">
                       <h2 class="labels-style floatright">برند</h2>
                       <input id="user-password" class="inputs-style dirltr" type="text" value="ABc263+$#@kmoifewH%$IKO34">
                    </div>
                    <br/>
                    <div class="divider-inputs">
                       <h2 class="labels-style floatright">مدل</h2>
                       <input id="user-password" class="inputs-style dirltr" type="text" value="ABc263+$#@kmoifewH%$IKO34">
                    </div>
                    <br/>
                    <div class="divider-inputs">
                       <h2 class="labels-style floatright">قیمت</h2>
                       <input id="user-password" class="inputs-style dirltr" type="text" value="ABc263+$#@kmoifewH%$IKO34">
                    </div>
                  </section>
              </div>
              <section id="section-more-information">
                <div id="divider-techniocal-info">
                   <h2 class="title-more-description">مشخصات فنی</h2>
                   <textarea id="technical-information" class="textareas-more-description" ></textarea>
                </div>

                <div id="divider-final-information">
                   <h2 class="title-more-description">توضیحات تکمیلی</h2>
                   <textarea id="final-information" class="textareas-more-description"></textarea>
                </div>
                <br/>
              </section>

              <section id="section-pictures">
                <div class="divider-base-pictures">
                    <h2 class="text-upload-pictures"> تصویر یک</h2>
                    <input type="file">
                </div>

                <div class="divider-base-pictures">
                    <h2 class="text-upload-pictures">تصویر دو</h2>
                    <input type="file">
                </div>

                <div class="divider-base-pictures">
                    <h2 class="text-upload-pictures">تصویر سه</h2>
                    <input type="file">
                </div>

                <div class="divider-base-pictures">
                    <h2 class="text-upload-pictures">تصویر چهار</h2>
                    <input type="file">
                </div>
              </section>

              <section id="base-buttons">
                  <button id="button-delete-product" class="style-buttons cursor-pointer" type="button" name="button">حذف محصول</button>
                  <button id="button-save-edits-product" class="style-buttons cursor-pointer" type="button" name="button">ذخیره تغییرات</button>
              </section>
        </section>


      </div>
    </div>
  </body>
</html>
