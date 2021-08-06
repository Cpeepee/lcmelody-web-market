<?php require "./includes/header.php";

$email = $_POST['nameAndFamily'];

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
            show_result("success","Please check your email<br/>the password has been sent to your email","","","Lc Melody","current");
        }
      }
      else
        show_result("error","incorrect email account","","","Lc Melody","current");


require "./includes/footer.php";?>
