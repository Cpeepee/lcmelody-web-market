<?php require "./includes/header.php";

$pass = $_POST['password'];
if ($pass == "")
{
  show_result("error","لطفا مقادیر معتبر را وارد کنید","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
}

    $thequery1 = "UPDATE t_customer SET `c_password` = '$pass' WHERE `c_id`='$customerSessionId';";
    if ($conn->query($thequery1) === TRUE)
          show_result("success","کلمه عبور شما با موفقیت تغییر یافت","","","Lc Melody","current");
    else
          show_result("error","کلمه عبور شما تغییر نیافت","","","Lc Melody","current");



require "./includes/footer.php";?>
