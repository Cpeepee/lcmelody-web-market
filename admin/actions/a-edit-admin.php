<?php require "./includes/header.php";

$id = $_POST['id'];
$mail = $_POST['email'];
$attempts = $_POST['attempts'];
$pass1 = $_POST['password-1'];
$pass2 = $_POST['password-2'];
$pass3 = $_POST['password-3'];

$id = (int)$id;

 $thequery = "UPDATE t_admin SET `a_email` ='$mail',`a_attempts_TL`= '$attempts',`a_first_pass`= '$pass1',`a_second_pass`= '$pass2',`a_third_pass`= '$pass3' WHERE `a_id`='$id'";

 if ($conn->query($thequery) === TRUE)
 {
      show_result("success","Admin (id=$id) has been updated","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
 }
 else
 {
      $te = convert_error_2str($conn->error);
      show_result("error","$te","","","Lc Melody","current");
 }

require "./includes/footer.php";?>
