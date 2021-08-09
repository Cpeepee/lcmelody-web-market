<?php
session_start();

if(isset($_SESSION["user_type"]) && $_SESSION["user_type"] === "23df93b500cebFB13a7e240dAL1bee805152f918b5")
{
  if(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true)
  {
    if(isset($_SESSION["s_customer_id"]))
    {
      $servername = "localhost";
      $username = "me";
      $password = "amx";
      $dbname = "lc3";
      $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error)
      {
        show_result("error","خطا در ارتباط با پایگاه داده","","","Database Error","current");
      }
    }
  }
}
else
{
  ?><script> window.location = "http://localhost/lc/p/login/index.php"; </script><?php
}

$customerSessionId =  $_SESSION['s_customer_id'];

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


function convert_error_2str($text="") //sql errors've some special charecters can make problem in js.window.location strings and parameters
{
  $text2 = str_replace( array( '\'', '"', '\"' , '\`' , ',' , ';', '<', '>' ), '', $text);
  return $text2;
}

?>
