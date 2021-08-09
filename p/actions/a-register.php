<?php
session_start();

if(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true)
{
  ?>
    <script>
        window.location=('../index.php');
    </script>
  <?php
}
require "../../includes/db-connection-without-session.php";

$name_family = $_POST['nameAndFamily'];
$phone_number = $_POST['phoneNumber'];
$email = $_POST['email'];
$address = $_POST['address'];
$password = $_POST['password'];

if ($name_family == "" || $phone_number == "" || $email == "" || $address == "" || $password == "")
{
  show_result("error","لطفا مقادیر معتبر را وارد کنید","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
}

$thequery1 = "INSERT INTO t_customer (c_FL_name,c_phonenumer,c_email,c_address,c_password)
    VALUES ('$name_family','$phone_number','$email','$address','$password');";
if ($conn->query($thequery1) === TRUE)
      show_result("success","account is created successfully","login","./login/index.php","Lc Melody","current");
else
      show_result("error","erro while create account","","","Lc Melody","current");

require "./includes/footer.php";?>
