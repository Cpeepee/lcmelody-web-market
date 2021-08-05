<?php
session_start();


//connection to database === this code is also in actions/header
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
$password1 = $_POST['password-a'];
$password2 = $_POST['password-b'];
$password3 = $_POST['password-c'];

$email = strtolower($email);


// $password1 = md5($password1);
// $password2 = md5($password2);
// $password3 = md5($password3);


if ($email== "" ||$password1== "" ||$password2== "" ||$password3== "")
{
  show_result("error","لطفا مقادیر معتبر را وارد کنید","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
}


//fetch admin info
$sql_search = "SELECT a_id,a_email,a_attempts_TL,a_first_pass,a_second_pass,a_third_pass FROM t_admin WHERE a_email='$email';";
$result_search = $conn->query($sql_search);
if ($result_search->num_rows > 0)
{
  while($row = $result_search->fetch_assoc())
  {
    $ad_id = $row['a_id'];
    $ad_email = $row['a_email'];
    $ad_attempts = $row['a_attempts_TL'];
    $ad_pass1 = $row['a_first_pass'];
    $ad_pass2 = $row['a_second_pass'];
    $ad_pass3 = $row['a_third_pass'];
  }
}
else
{
  $te = convert_error_2str($conn->error);
  show_result("error","خطا در ورود <br/>.$te","","","Lc Melody","current");
}

$ad_attempts = (int)$ad_attempts;
if($ad_attempts >= 5)
  show_result("error","این حساب مسدود شده است","","","Lc Melody","current");
else
{
  //check login information
  if($password1 == $ad_pass1 && $password2 == $ad_pass2 && $password3 == $ad_pass3)
  {
    $_SESSION["s_admin_id"] = $ad_id;
    $_SESSION["state_login"] = true;
    $_SESSION["user_type"] = "3e64Bli1LebFB13a7e240de6b54IR44c4413161400";
    ?><script> window.location= "../index.php";</script><?php
  }
  else
  {
    //login failed
    $ad_attempts++;
    $thequery = "UPDATE t_admin SET `a_attempts_TL`= '$ad_attempts' WHERE `a_email`='$email';";
    if ($conn->query($thequery) === TRUE)
          show_result("error","پست الکترونیکی یا کلمه عبور نامعتبر است","","","Lc Melody","current");
    else
    {
         $te = convert_error_2str($conn->error);
         show_result("error","خطا در ورود <br/>.$te","","","Lc Melody","current");
    }
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

function convert_error_2str($text="") //sql errors've some special charecters can make problem in js.window.location strings and parameters
{
  $text2 = str_replace( array( '\'', '"', '\"' , '\`' , ',' , ';', '<', '>' ), '', $text);
  return $text2;
}


require "./includes/footer.php";?>
