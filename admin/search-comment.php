<?php require ('./includes/the-security.php'); ?>
<?php include ('./includes/the-header.php');?>
<title>جستجو نظر - ال سی ملودی</title>
<link rel="stylesheet" href="./assets/css/search-customer.css">
<?php include ('./includes/the-close-head.php');?>
<?php include ('./includes/the-banner.php'); ?>
    <div id='main-layer'>
      <?php include('./includes/the-menu.php'); ?>
      <div id="base" class="def-border set-two-font">
          <div id="base-search-customer">
            <form action="./actions/a-search-comment-result.php" method="post">
              <input id="input-search-customer" type="text" name="searched" placeholder="جستجو نظر">
              <div id="button-search-customer" class="def-border cursor-pointer unselectable">جستجو</div>
            </form>
          </div>
      </div>
    </div>
  </body>
</html>
