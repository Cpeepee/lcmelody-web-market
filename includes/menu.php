<?php

session_start();

?>


<div id="main-menu">
    <div id="menu-top">

        <div id="search-box">
            <img id="search-button" class="unselectable cursor-pointer" src="../assets/img/icons/graysearch-50.png" alt="search-icon" onclick="searchFunc()"/>
            <input id="search-input" class="set-the-font" type="text" name="searchInput" placeholder="جستجو در ال سی ملودی" dir="rtl">
        </div>

        <div id="order-box" class="unselectable cursor-pointer" onclick="window.location.href='my-cart.php'">
            <center><img id="order-icon" src="../assets/img/icons/shoppingcart-50.png" alt="shopping-cart"/></center>
              <?php
              if(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true)
              {
                if(isset($_SESSION["s_customer_id"]))
                {
                  $servername = "localhost";
                  $username = "me";
                  $password = "amx";
                  $dbname = "lc3";
                  $conn = new mysqli($servername, $username, $password, $dbname);
                  if ($conn->connect_error)
                  {
                    show_result("error","خطا در ارتباط با پایگاه داده","","","Database Error","current");
                  }
                  $customerSessionId =  $_SESSION['s_customer_id'];
                  $customerCartList = "SELECT COUNT(cl_c_id) AS cartlistNumber FROM t_cart_list WHERE `cl_c_id`='$customerSessionId';";
                  $result_searchCartList = $conn->query($customerCartList);
                  if ($result_searchCartList->num_rows > 0)
                  {
                    while($row = $result_searchCartList->fetch_assoc())
                    {
                        ?>
                        <div id="order-counter-box">
                          <center><p id="order-count-text" class="set-the-font"><?php echo $row['cartlistNumber'];?></p></center>
                        </div>
                        <?php
                    }
                  }
                  else
                    show_result("error","error while loading cartlist items","","","Lc Melody","current");
                }
              }
              ?>
        </div>
        <?php
        if(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true)
        {
          if(isset($_SESSION["s_customer_id"]))
          {
            ?>
            <div id="account-box" class="unselectable cursor-pointer"  onclick="window.location.href='client-area.php'">
            <?php
          }
        }
        else
        {
          ?>
          <div id="account-box" class="unselectable cursor-pointer"  onclick="window.location.href='login-register.php'">
          <?php
        }
        ?>
            <h3 id="account-text" class="set-the-font">حساب کاربری</h3>
            <img id="account-icon" src="../assets/img/icons/customer-50.png" alt="customer-icon"/>
        </div>
    </div>

    <div id="menu-bottom">
        <h4 id="studio-accessories" class="bottom-menu-style unselectable cursor-pointer"  onclick="window.location.href='studio-products.php'">تجهیزات استودیویی</h4>
        <h4 id="acoustic-accessories" class="bottom-menu-style unselectable cursor-pointer" onclick="window.location.href='acoustic-products.php'">تجهیزات آکوستیک</h4>
        <h4 id="accessories" class="bottom-menu-style unselectable cursor-pointer" onclick="window.location.href='accessories-products.php'">تجهیزات جانبی</h4>
        <h4 id="contact-us" class="bottom-menu-style unselectable cursor-pointer" onclick="window.location.href='send-ticket.php'">تماس با ما</h4>
    </div>


    <script>
    //input search if enter pressed from keyboard
    const search_enter_button = document.getElementById("search-input");
    search_enter_button.addEventListener("keyup", function(event)
    {
        if (event.key === "Enter")
            searchFunc();
    });

      function searchFunc() //button search clicked
      {
          var search_input_val = document.getElementById("search-input").value;
          window.location='search.php?searched='+search_input_val;
      }
    </script>

</div>
