<?php
    require ('../includes/security.php');
    include ('../includes/header.php');
?>
    <title>فروشگاه ال سی ملودی</title>
    <link rel="stylesheet" href="../assets/css/send-ticket.css">
<?php
    include ('../includes/close-head.php');
    include ('../includes/banner.php');
    include ('../includes/menu.php');
?>

<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
  <div id="base-send-ticket" class="def-border set-two-font">
    <h1 id="title" class="set-the-font">ارسال پیام به پشتیبانی</h1>
      <div id="base-title-email">
        <div id="title-right" class="style-title-email-sides">
          <h2 class="set-the-font style-label">موضوع</h2>
          <input id="title-ticket" class="input-style def-border set-two-font" type="text" name="title" value="">
        </div>
        <div id="email-left" class="style-title-email-sides">
          <h2 class="set-the-font style-label">پست الکترونیک</h2>
          <input id="email-ticket" class="input-style def-border set-two-font" type="text" name="email" value="">
        </div>
      </div>

      <div id="base-message">
        <h2 class="set-the-font style-label">متن</h2>
        <textarea id="text-ticket" class="def-border" name="textticket" rows="5"></textarea>
        <p>
      </div>

      <div id="base-buttons" class="set-the-font cursor-pointer">
          <div id="send-button" class="unselectable buttons-style">
            <h2 class="button-text-style">ارسال</h2>
          </div>
          <div id="cancel-button" class="unselectable buttons-style">
            <h2 class="button-text-style">لغو</h2>
          </div>
      </div>
    <br/>
  </div>
  <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->

  </body>
</html>
