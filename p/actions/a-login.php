<?php
session_start();
require "../../includes/db-connection-without-session.php";

$email = $_POST['email'];
$password = $_POST['password'];

if ($email == "" ||$password == "")
{
  show_result("error","لطفا مقادیر معتبر را وارد کنید","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
}

  $sql_search = "SELECT c_id,c_attempts_TL,c_email,c_password FROM t_customer WHERE `c_email` = '$email';";
  $result_search = $conn->query($sql_search);
  if ($result_search->num_rows > 0)
  {
    while($row = $result_search->fetch_assoc())
    {
        $c_mail = $row['c_email'];
        $c_pass = $row['c_password'];
        $c_id = $row['c_id'];
        $c_attempts = $row['c_attempts_TL'];
    }
  }
  else
    show_result("error","incorrect email","","","Lc Melody","current");


    $c_attempts = (int)$c_attempts;
    if($c_attempts >= 5)
    {
      show_result("error","this account is blocked","","","Lc Melody","current");
    }
    else
    {
      if($email == $c_mail && $password == $c_pass)
      {
        $_SESSION["s_customer_id"] = $c_id;
        $_SESSION["state_login"] = true;
        $_SESSION["user_type"] = "23df93b500cebFB13a7e240dAL1bee805152f918b5";
        ?><script> window.location= "../client-area.php";</script><?php
      }
      else
      {
          //failed
          $c_attempts++;
          $thequery1 = "UPDATE t_customer SET `c_attempts_TL` = '$c_attempts' WHERE `c_id`=$c_id;";
          if ($conn->query($thequery1) === TRUE)
                show_result("error","پست الکترونیکی یا کلمه عبور نامعتبر است","","","Lc Melody","current");
          else
                show_result("error","خطا در ورود","","","Lc Melody","current");
      }
    }

require "./includes/footer.php";?>
