<?php
session_start();
// $_SESSION["s_admin_id"] = $admininfo['id'];
// $_SESSION["state_login"] = true;
// $_SESSION["user_type"] = "3e64Bi1LebFB13a7e240de6b54IR44c4413161400";

//database host info
/*
$username = "seniorad_lc3";
$password = "Mx6pUGixG9Ytw6Z";
$dbname = "seniorad_lc3";

*/


if(isset($_SESSION["user_type"]) && $_SESSION["user_type"] === "3e64Bli1LebFB13a7e240de6b54IR44c4413161400")
{
  if(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true)
  {
    if(isset($_SESSION["s_admin_id"]))
    {
      $servername = "localhost";
      $username = "me";
      $password = "amx";
      $dbname = "lc3"; //IF WANT CHANGE DATABASE INFO ALSO CHANGE THIS VALUES ON A-LOGIN.PHP
      $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error)
      {
        $te = convert_error_2str($conn->connect_error);
        show_result("error","خطا در ارتباط با پایگاه داده <br/>.$te","","","Database Error","current");
      }
    }
  }
}
else
{
  ?><script> window.location = "http://localhost/lc/admin/login.php"; </script><?php
}


function show_result($mode="error",$text="result text",$button="",$target="",$title="LC Melody",$window="current")
{
    if($window=="new")
    {
      //IF WANT CHANGE SHOW_RESULT INFO ALSO CHANGE THIS VALUES ON A-LOGIN.PHP and the-security
      ?>
        <script>
            window.open('http://localhost/lc/admin/result.php?mode=<?php echo $mode;?>&text=<?php echo $text;?>&button=<?php echo $button;?>&target=<?php echo $target;?>&title=<?php echo $title;?>');
        </script>
      <?php
    }
    else
    {
    ?>
        <script>
            window.location=('http://localhost/lc/admin/result.php?mode=<?php echo $mode;?>&text=<?php echo $text;?>&button=<?php echo $button;?>&target=<?php echo $target;?>&title=<?php echo $title;?>');
        </script>
     <?php
    }

}


function convert_error_2str($text="") //sql errors've some special charecters can make problem in js.window.location strings and parameters
{
  $text2 = str_replace( array( '\'', '"', '\"' , '\`' , ',' , ';', '<', '>' ), '', $text);
  return $text2;
}

?>
