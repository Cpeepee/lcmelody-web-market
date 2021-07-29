<?php require "./includes/header.php";

$id = $_POST['id'];
$name = $_POST['name'];
$family = $_POST['family'];
$pass = $_POST['password'];
$attempts = $_POST['attempts'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$address = $_POST['address'];




 $thequery = "UPDATE t_customer SET c_FL_name = '$name $family',c_password= '$pass',c_phonenumer= '$phone',c_email= '$mail',c_attempts_TL= '$attempts',c_address= '$address' WHERE c_id=$id;";

 if ($conn->query($thequery) === TRUE)
 {
      show_result("success","Customer updated","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
 }
 else
 {
      show_result("error","$conn->error","","","Lc Melody","current");
 }

require "./includes/footer.php";?>
