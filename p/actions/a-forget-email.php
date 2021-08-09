<?php
require "../../includes/db-connection-without-session.php";

$name_family = $_POST['nameAndFamily'];
$phone_number = $_POST['phoneNumber'];

if ($name_family == "" ||$phone_number == "")
{
  show_result("error","لطفا مقادیر معتبر را وارد کنید","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
}

  $sql_search = "SELECT c_email FROM t_customer WHERE `c_FL_name`='$name_family' AND `c_phonenumer`='$phone_number';";
  $result_search = $conn->query($sql_search);
  if ($result_search->num_rows > 0)
  {
    while($row = $result_search->fetch_assoc())
    {
      show_result("success","پست الکترونیکی شما : ".$row['c_email']." میباشد ","","","Lc Melody","current");
    }
  }
  else
    show_result("error","نام و نام خانوادگی یا شماره تلفن جهت بازیابی پست الکترونیکی معتبر نمی باشد","","","Lc Melody","current");


require "./includes/footer.php";
?>
