<?php require "./includes/header.php";

$id = $_POST['id'];
$name = $_POST['name'];
$family = $_POST['family'];
$pass = $_POST['password'];
$attempts = $_POST['attempts'];
$phone = $_POST['phone'];
$mail = $_POST['email'];
$address = $_POST['address'];

$id = (int)$id;
$mail = strtolower($mail);


 $thequery = "UPDATE t_customer SET `c_FL_name` = '$name $family',`c_password`= '$pass',`c_phonenumer`= '$phone',`c_email`= '$mail',`c_attempts_TL`= '$attempts',`c_address`= '$address' WHERE `c_id`='$id';";

 if ($conn->query($thequery) === TRUE)
 {
      show_result("success","مشتری با موفقیت ویرایش شد","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
 }
 else
 {
   $te = convert_error_2str($conn->error);
   show_result("error","مشتری ویرایش نشد <br/>.$te","","","Lc Melody","current");
 }

require "./includes/footer.php";?>
