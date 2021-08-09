<?php require ('./includes/the-security.php'); ?>
<?php include ('./includes/the-header.php');?>
<title>افزودن محصول جدید  - ال سی ملودی</title>
<link rel="stylesheet" href="./assets/css/add-product.css">
<?php include ('./includes/the-close-head.php');?>
<?php include ('./includes/the-banner.php'); ?>

    <div id='main-layer'>
      <?php include('./includes/the-menu.php'); ?>
      <div id="base-edit-product" class="def-border set-two-font">

        <section id="parrent-section-style">
          <form action="./actions/a-add-product.php" method="POST">
            <h1 style="font-size:35px;margin:15px 2.50%;">افزودن محصول جدید</h1>
            <div id="buttons-divider">
                  <section id="right-side" class="sides-style">
                    <div class="divider-inputs">
                      <h2 class="labels-style floatright">عنوان محصول</h2>
                      <input  class="inputs-style" type="text" name="p-title" maxlength="65" placeholder="میکروفن بایا">
                    </div>
                    <br/>
                    <div class="divider-inputs">
                       <h2 class="labels-style floatright">دسته بندی</h2>
                       <input  class="inputs-style" type="text" name="p-type" maxlength="15" placeholder="استودیویی">
                    </div>
                    <br/>
                    <div class="divider-inputs">
                       <h2 class="labels-style floatright">تخفیف</h2>
                       <input  class="inputs-style dirltr" type="text" name="p-discount" maxlength="10" placeholder="10,000">
                    </div>
                    <br/>
                    <div class="divider-inputs">
                       <h2 class="labels-style floatright">تعداد موجودی</h2>
                       <input  class="inputs-style dirltr" type="text" name="p-amount" maxlength="3" placeholder="999">
                    </div>
                    <br/>
                    <div class="divider-inputs">
                       <h2 class="labels-style floatright">اولویت در نمایش</h2>
                       <input  class="inputs-style dirltr" type="text" name="p-priority" maxlength="1" placeholder="6">
                    </div>
                    <br/>
                    <div class="divider-inputs">
                       <h2 class="labels-style floatright">نمایش داده شود</h2>
                       <input class="inputs-style dirltr" type="text" name="p-visible" maxlength="5" placeholder="0">
                    </div>
                  </section>


                  <section id="left-side" class="sides-style">
                    <br/>
                    <div class="divider-inputs">
                       <h2 class="labels-style floatright">برند</h2>
                       <input  class="inputs-style dirltr" type="text" name="p-brand" maxlength="15" placeholder="Sony">
                    </div>
                    <br/>
                    <div class="divider-inputs">
                       <h2 class="labels-style floatright">مدل</h2>
                       <input  class="inputs-style dirltr" type="text" name="p-model" maxlength="15" placeholder="A55-6">
                    </div>
                    <br/>
                    <div class="divider-inputs">
                       <h2 class="labels-style floatright">قیمت</h2>
                       <input  class="inputs-style dirltr" type="text" name="p-price" maxlength="10" placeholder="120,000">
                    </div>
                  </section>
              </div>
            <section id="section-more-information">
                <div id="divider-techniocal-info">
                   <h2 class="title-more-description">مشخصات فنی</h2>
                   <textarea id="technical-information" class="textareas-more-description" name="p-technical" maxlength="1000" placeholder="باتری : ندارد; کیف : ندارد;"></textarea>
                </div>

                <div id="divider-final-information">
                   <h2 class="title-more-description">توضیحات تکمیلی</h2>
                   <textarea id="final-information" class="textareas-more-description" name="p-description" maxlength="2000" placeholder="میتوانید در توضیحات از تگ هایی مثل : <br/> <h2> <img> <b> هم کنید"></textarea>
                </div>
                <br/>
            </section>

              <section id="base-buttons">
                  <input id="button-save-edits-product" class="style-buttons cursor-pointer" type="submit" value="ذخیره"></button>
                </form>
              </section>
        </section>


      </div>
    </div>
  </body>
</html>
