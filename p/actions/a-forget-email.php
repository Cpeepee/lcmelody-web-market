<?php
// require "./includes/header.php";

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

if ($name_family == "" ||$phone_number == "")
{
  show_result("error","لطفا مقادیر معتبر را وارد کنید","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
}

  $sql_search = "SELECT c_email FROM t_customer WHERE `c_FL_name`='$name_family' AND `c_phonenumer`='$phone_number';";
  $result_search = $conn->query($sql_search);
  if ($result_search->num_rows > 0)
  {
    while($row = $result_search->fetch_assoc())
    {
      show_result("success","ur email is : ".$row['c_email'],"","","Lc Melody","current");
    }
  }
  else
    show_result("error","name family and phone is not ok","","","Lc Melody","current");








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













require "./includes/footer.php";
?>
