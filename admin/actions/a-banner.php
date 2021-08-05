<?php require "./includes/header.php";

$special1 = $_POST['product-special-1'];
$special2 = $_POST['product-special-2'];
$special3 = $_POST['product-special-3'];
$special4 = $_POST['product-special-4'];
$special5 = $_POST['product-special-5'];
$special6 = $_POST['product-special-6'];

if ($special1== "" ||$special2== "" ||$special3== "" ||$special4== "" ||$special5== "" ||$special6== "")
{
  show_result("error","لطفا مقادیر معتبر را وارد کنید","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
}


 $thequery = "UPDATE t_banners SET special_product_a = '$special1',special_product_b= '$special2',special_product_c= '$special3',special_product_d= '$special4',special_product_e= '$special5',special_product_f= '$special6' WHERE b_id='0';";
 if ($conn->query($thequery) === TRUE)
 {
      show_result("success","بنر با موفقیت ویرایش شد","","","Result update special products Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
 }
 else
 {
      $te = convert_error_2str($conn->error);
      show_result("error","خطا در ویرایش بنر <br/>.$te","","","Lc Melody","current");
 }

require "./includes/footer.php";?>
