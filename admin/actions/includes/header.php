<?php
// session_start();
// if(isset($_SESSION["user_type"]) && $_SESSION["user_type"] === "3e6405ebeb13a7e240de6b5c3c441316")
// {
//   if(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true)
//   {
        $servername = "localhost";
        $username = "me";
        $password = "amx";
        $dbname = "lc2";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error)
        {
          $te = convert_error_2str($conn->connect_error);
          show_result("error","خطا در ارتباط با پایگاه داده <br/>.$te","","","Database Error","current");
        }

//   }
// }
// else
// {
//   ><script> window.location = "login.php"; </script><?php
// }


function show_result($mode="error",$text="result text",$button="",$target="",$title="LC Melody",$window="current")
{
    if($window=="new")
    {
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


// function divide_money($value)
// {
//   $result;
//   $len = strlen($value);
//   if($len == 3 || $len == 6 || $len ==9)
//     $len--;
//   for($a=0;$a<=;$a++)
//   {
//     $result = substr($value,6);
//
//
//
//
//   }
// }






















?>
