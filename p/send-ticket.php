<?php
    session_start();

    include ('../includes/header.php');
?>
    <title>ارسال تیکت </title>
    <link rel="stylesheet" href="../assets/css/send-ticket.css">
<?php
    include ('../includes/close-head.php');
    include ('../includes/banner.php');
    include ('../includes/menu.php');
?>

  <div id="base-send-ticket" class="def-border set-two-font">
    <h1 id="title" class="set-the-font">ارسال پیام به پشتیبانی</h1>
      <div id="base-title-email">
        <div id="title-right" class="style-title-email-sides">
          <h2 class="set-the-font style-label">موضوع</h2>
    <form action="./actions/a-open-new-ticket.php" method="post">
          <input id="title-ticket" class="input-style def-border set-two-font" type="text" name="title" value="">
        </div>




        <?php
        //check if customer is logged in set readonly and cid to email
        if(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true)
        {
          if(isset($_SESSION["s_customer_id"]))
          {
            $customerSessionId =  $_SESSION['s_customer_id'];
            ?>
                <input id="email-ticket" class="input-style def-border set-two-font" type="hidden" name="email" value="<?php echo $customerSessionId;?>">
            <?php
          }
        }
        else
        {
          ?>
          <div id="email-left" class="style-title-email-sides">
            <h2 class="set-the-font style-label">پست الکترونیک</h2>
              <input id="email-ticket" class="input-style def-border set-two-font" type="text" name="email" maxlength="60">
          </div>

          <?php
        }
        ?>
      </div>

      <div id="base-message">
        <h2 class="set-the-font style-label">متن</h2>
        <textarea id="text-ticket" class="def-border" name="textTicket" rows="5"  maxlength="2500"></textarea>
        <p>
      </div>

      <div id="base-buttons" class="set-the-font cursor-pointer">
        <input id="send-button" class="unselectable buttons-style button-text-style" type="submit" value="ارسال">
      </form>
          <div id="cancel-button" class="unselectable buttons-style" onclick="window.location=('index.php')">
            <h2 class="button-text-style">لغو</h2>
          </div>
      </div>
    <br/>
  </div>
  <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->

  </body>
</html>
