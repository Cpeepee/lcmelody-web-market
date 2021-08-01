<?php
  require './actions/includes/header.php';
  include ('./includes/the-header.php');
?>
<title>جستجو - ال سی ملودی</title>
<link rel="stylesheet" href="./assets/css/search-customer.css">

<?php
  include ('./includes/the-close-head.php');
  include ('./includes/the-banner.php');
?>
    <div id='main-layer'>
      <?php include('./includes/the-menu.php'); ?>
      <div id="base" class="def-border set-two-font">
          <div id="base-search-customer">
              <input id="input-search-customer" type="text" name="search-customer" placeholder="<?php echo $search_mode;?> جستجو">
              <div id="button-search-customer" class="def-border cursor-pointer unselectable">جستجو</div>
          </div>
      </div>
    </div>
  </body>
</html>


<?php require './actions/includes/footer.php'; ?>
