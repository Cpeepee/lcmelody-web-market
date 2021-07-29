<div id="main-menu">
    <div id="menu-top">

        <div id="dark-light-box">
            <img id="light-switch" class="unselectable cursor-pointer padding-for-switches" src="../assets/img/icons/lightsun-50.png" alt="lightsun"/>
            <img id="dark-switch" class="unselectable cursor-pointer padding-for-switches" src="../assets/img/icons/bluemoon-50.png" alt="darkmoon-with-color-31469f"/>
        </div>

        <div id="search-box">
            <img id="search-button" class="unselectable cursor-pointer" src="../assets/img/icons/graysearch-50.png" alt="search-icon" onclick="window.location.href='search.php'"/>
            <input id="search-input" class="set-the-font" type="text" name="searchInput" placeholder="جستجو در ال سی ملودی" dir="rtl">
            <!-- <section id="search-box-suggestions" style="visibility:hidden;">

                <div class="searched-item-style cursor-pointer unselectable">
                  <h3>the suggewstion from the fg mwegjh retj ghjioethj oitrjhio rjtoi hjiortj hoijrtio hiortj iohjtrio hjiotr jhoijr toihjoirgoirej iogjoirgggggggggggggggggggggggggggggggggggggge joig re 1g2re3 1g23er 1g231er 23g1 23r1 g32er1 32g1er32server </h3>
                </div>
            </section> -->
        </div>

        <div id="order-box" class="unselectable cursor-pointer" onclick="window.location.href='my-cart.php'">
            <center><img id="order-icon" src="../assets/img/icons/shoppingcart-50.png" alt="shopping-cart"/></center>
            <div id="order-counter-box">
                <center><p id="order-count-text" class="set-the-font">۹۹</p></center>
            </div>
        </div>

        <div id="account-box" class="unselectable cursor-pointer"  onclick="window.location.href='client-area.php'">
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
      // Scroll to Sticky Menu
      window.onscroll = function() {scroll_to_sticky_menu()};
      var mainmanu = document.getElementById("main-menu");
      var sticky = mainmanu.offsetTop;
      function scroll_to_sticky_menu()
      {
        if (window.pageYOffset >= sticky)
            mainmanu.classList.add("sticky")
        else
            mainmanu.classList.remove("sticky");
      }
    </script>
</div>
