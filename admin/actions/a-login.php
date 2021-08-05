<?php
session_start();

$email = $_POST['email'];
$password1 = $_POST['password-a'];
$password2 = $_POST['password-b'];
$password3 = $_POST['password-c'];

$email = strtolower($email);

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
      $admininfo = array("attempts"=>"$row['a_attempts_TL']", "pass1"=>"$row['a_first_pass']", "pass2"=>"$row['a_second_pass']", "pass3"=>"$row['a_third_pass']");
  }


      //check login information
      if($password1 == $admininfo['pass1'] && $password2 == $admininfo['pass2'] && $password3 == $admininfo['pass3'])
      {
        //set session key to admin ! -----------------------------------------------------------------------
        //redirect to /admin/index.php--------------------------------------------------------------------
        //$_SESSION["state_login"] = true;
      }
      else
      {
        //login failed
        $admininfo['attempts']++;
        $thequery = "UPDATE t_admin SET `a_attempts_TL`= '$admininfo['attempts']' WHERE `a_email`='$email';";
        if ($conn->query($thequery) === TRUE)
              show_result("error","پست الکترونیکی یا کلمه عبور نامعتبر است","","","Lc Melody","current");
        else
        {
             $te = convert_error_2str($conn->error);
             show_result("error","خطا در ورود <br/>.$te","","","Lc Melody","current");
        }
      }

}
else
{
  //search query failed
  $te = convert_error_2str($conn->error);
  show_result("error","خطا در ورود <br/>.$te","","","Lc Melody","current");
}







//function validation protect sql injection and validate data
function insql($p1,$p2,$p3,$p4)
{

  $Generic_SQL_Injection_Payloads = array
        (
          "'",
          "\'",
          "''",
          '`',
          "``",
          ",",
          '"',
          '\"',
          '""',
          "/",
          "//",
          "\",
          "\\",
          ";",
          "or",
          "OR",
          "Or",
          "oR",
          " OR",
          " or",
          " oR",
          " Or",
          "AND",
          "And",
          "aND",
          "aNd",
          "and",
          "anD",
          "AnD",
          "WHERE",
          "Where",
          "wHERE",
          "whERE",
          "  ",
          "||",
          " ||",
          " | |",
          "' or "",
          "-- or #",
          "' OR '1",
          "' OR 1 -- -",
          "" OR "" = "",
          "" OR 1 = 1 -- -",
          "' OR '' = '",
          "'='",
          "'LIKE'",
          "'=0--+",
          "OR 1=1",
          "' OR 'x'='x",
          "' AND id IS NULL; --",
          "'''''''''''''UNION SELECT '2",
          "%00",
          "/*…*/",
          "# Numeric",
          "AND 1",
          "AND 0",
          "AND true",
          "AND false",
          "1-false",
          "1-true",
          "1*56",
          "-2",
          "1' ORDER BY 1--+",
          "1' ORDER BY 2--+",
          "1' ORDER BY 3--+",
          "1' ORDER BY 1,2--+",
          "1' ORDER BY 1,2,3--+",
          "1' GROUP BY 1,2,--+",
          "1' GROUP BY 1,2,3--+",
          "' GROUP BY columnnames having 1=1 --",
          "-1' UNION SELECT 1,2,3--+",
          "' UNION SELECT sum(columnname ) from tablename --",
          "-1 UNION SELECT 1 INTO @,@",
          "-1 UNION SELECT 1 INTO @,@,@",
          "1 AND (SELECT * FROM Users) = 1",
          "' AND MID(VERSION(),1,1) = '5';"
        );
  foreach ($Generic_SQL_Injection_Payloads as $value)
  {
    $p1 = str_replace($value,"",$p1);
    $p2 = str_replace($value,"",$p2);
    $p3 = str_replace($value,"",$p3);
    $p4 = str_replace($value,"",$p4);
  }
  $output = array($p1,$p2,$p3,$p4);
  return $output;
}



//functions message from actions/includes/header.php
function show_result($mode="error",$text="result text",$button="",$target="",$title="LC Melody",$window="current")
{
    ?>
        <script>
            window.location=('http://localhost/lc/admin/result.php?mode=<?php echo $mode;?>&text=<?php echo $text;?>&button=<?php echo $button;?>&target=<?php echo $target;?>&title=<?php echo $title;?>');
        </script>
     <?php

}
function convert_error_2str($text="") //sql errors've some special charecters can make problem in js.window.location strings and parameters
{
  $text2 = str_replace( array( '\'', '"', '\"' , '\`' , ',' , ';', '<', '>' ), '', $text);
  return $text2;
}







require "./includes/footer.php";?>
