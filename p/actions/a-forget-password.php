<?php
require "../../includes/db-connection-without-session.php";

$email = $_POST['email'];

if ($email == "")
{
  show_result("error","لطفا مقادیر معتبر را وارد کنید","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
}

      $sql_search = "SELECT c_password FROM t_customer WHERE `c_email` = '$email';";
      $result_search = $conn->query($sql_search);
      if ($result_search->num_rows > 0)
      {
        while($row = $result_search->fetch_assoc())
        {
            $subject = "Forget Password LC Melody";
            $txt = "Your password is : ".$row['c_password'];
            $headers = "From: info@lcmelody.ir" . "\r\n";
            mail($email,$subject,$txt,$headers);
            show_result("success","کلمه عبور به پست الکترونیکی شما ارسال شد","","","Lc Melody","current");
        }
      }
      else
        show_result("error","پست الکترونیکی وارد شده معتبر نمی باشد","","","Lc Melody","current");

require "./includes/footer.php";?>
