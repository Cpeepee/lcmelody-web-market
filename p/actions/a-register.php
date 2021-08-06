<?php
session_start();
if(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true)
{
  ?>
    <script>
        window.location=('../index.php');
    </script>
  <?php
}


$servername = "localhost";
$username = "me";
$password = "amx";
$dbname = "lc3";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
{
  show_result("error","خطا در ارتباط با پایگاه داده","","","Database Error","current");
}




$name_family = $_POST['nameAndFamily'];
$phone_number = $_POST['phoneNumber'];
$email = $_POST['email'];
$address = $_POST['address'];
$password = $_POST['password'];

if ($name_family == "" || $phone_number == "" || $email == "" || $address == "" || $password == "")
{
  show_result("error","لطفا مقادیر معتبر را وارد کنید","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
}

$thequery1 = "INSERT INTO t_customer (c_FL_name,c_phonenumer,c_email,c_address,c_password)
    VALUES ('$name_family','$phone_number','$email','$address','$password');";
if ($conn->query($thequery1) === TRUE)
      show_result("success","account is created successfully","login","./login/index.php","Lc Melody","current");
else
      show_result("error","erro while create account","","","Lc Melody","current");








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
