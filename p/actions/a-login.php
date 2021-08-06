<?php
session_start();


$servername = "localhost";
$username = "me";
$password = "amx";
$dbname = "lc3";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
{
  $te = convert_error_2str($conn->connect_error);
  show_result("error","خطا در ارتباط با پایگاه داده <br/>.$te","","","Database Error","current");
}





$email = $_POST['email'];
$password = $_POST['password'];

if ($email == "" ||$password == "")
{
  show_result("error","لطفا مقادیر معتبر را وارد کنید","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
}

  $sql_search = "SELECT c_id,c_attempts_TL FROM t_customer WHERE `c_email` = '$email' AND `c_password` = '$password';";
  $result_search = $conn->query($sql_search);
  if ($result_search->num_rows > 0)
  {
    while($row = $result_search->fetch_assoc())
    {
        $c_mail = $row['c_mail'];
        $c_pass = $row['c_password'];
        $c_id = $row['c_id'];
        $c_attempts = $row['c_attempts_TL'];
    }
  }
  else
    show_result("error","incorrect email password","","","Lc Melody","current");


    $c_attempts = (int)$c_attempts;
    if($c_attempts >= 5)
    {
      show_result("error","this account is blocked","","","Lc Melody","current");
    }
    else
    {
      if($email == $c_mail && $password == $c_pass)
      {
        // $_SESSION["s_admin_id"] = $ad_id;
        // $_SESSION["state_login"] = true;
        // $_SESSION["user_type"] = "3e64Bli1LebFB13a7e240de6b54IR44c4413161400";
        ?><script> window.location= "../index.php";</script><?php
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






    //functions message from actions/includes/header.php
    function show_result($mode="error",$text="result text",$button="",$target="",$title="LC Melody",$window="current")
    {
        if($window=="new")
        {      //IF WANT CHANGE SHOW_RESULT INFO ALSO CHANGE THIS VALUES ON action/header and the-security

          ?>
            <script>
                window.open('../result.php?mode=<?php echo $mode;?>&text=<?php echo $text;?>&button=<?php echo $button;?>&target=<?php echo $target;?>&title=<?php echo $title;?>');
            </script>
          <?php
        }
        else
        {
        ?>
            <script>
                window.location=('../result.php?mode=<?php echo $mode;?>&text=<?php echo $text;?>&button=<?php echo $button;?>&target=<?php echo $target;?>&title=<?php echo $title;?>');
            </script>
         <?php
        }

    }






require "./includes/footer.php";?>
