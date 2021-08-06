<?php require "./includes/header.php";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];
$address = $_POST['address'];

if ($firstname == "" || $lastname == "" || $phonenumber == "" || $email == "" || $address == "")
{
  show_result("error","لطفا مقادیر معتبر را وارد کنید","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
}

    $thequery1 = "UPDATE t_customer SET `c_FL_name`='$firstname $lastname',`c_phonenumer`='$phonenumber',`c_email`='$email',`c_address`='$address' WHERE `c_id`='$customerSessionId';";
    if ($conn->query($thequery1) === TRUE)
          show_result("success","customer edited","","","Lc Melody","current");
    else
          show_result("error","customer is not edit","","","Lc Melody","current");



require "./includes/footer.php";?>
