<?php

$servername = "localhost";
$username = "me";
$password = "amx";
$dbname = "lc3";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
{
  show_result("error","خطا در ارتباط با پایگاه داده","","","Database Error","current");
}

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
            show_result("success","Please check your email<br/>the password has been sent to your email","","","Lc Melody","current");
        }
      }
      else
        show_result("error","incorrect email account","","","Lc Melody","current");










            function show_result($mode="error",$text="result text",$button="",$target="",$title="LC Melody",$window="current")
            {
                if($window=="new")
                {
                  ?>
                    <script>
                        window.open('http://localhost/lc/p/result.php?mode=<?php echo $mode;?>&text=<?php echo $text;?>&button=<?php echo $button;?>&target=<?php echo $target;?>&title=<?php echo $title;?>');
                    </script>
                  <?php
                }
                else
                {
                ?>
                    <script>
                        window.location=('http://localhost/lc/p/result.php?mode=<?php echo $mode;?>&text=<?php echo $text;?>&button=<?php echo $button;?>&target=<?php echo $target;?>&title=<?php echo $title;?>');
                    </script>
                 <?php
                }
            }







require "./includes/footer.php";?>
