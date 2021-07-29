<?php require "./includes/header.php";

$special1 = $_POST['product-special-1'];
$special2 = $_POST['product-special-2'];
$special3 = $_POST['product-special-3'];
$special4 = $_POST['product-special-4'];
$special5 = $_POST['product-special-5'];
$special6 = $_POST['product-special-6'];



 $thequery = "UPDATE t_banners SET special_product_a = '$special1',special_product_b= '$special2',special_product_c= '$special3',special_product_d= '$special4',special_product_e= '$special5',special_product_f= '$special6' WHERE b_id='0';";
 if ($conn->query($thequery) === TRUE)
 {
      show_result("success","Banner Updated","","","Result update special products Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
 }
 else
 {
      show_result("error","$conn->error","","","Result update special products Lc Melody","current");
 }

require "./includes/footer.php";?>
