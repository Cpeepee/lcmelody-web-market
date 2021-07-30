<?php
session_start();

$email = $_POST['email'];
$password1 = $_POST['password-a'];
$password2 = $_POST['password-b'];
$password3 = $_POST['password-c'];

if (empty($_POST))
{
  show_result("error","please enter inputs!","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
}





//fetch admin info
$sql_search = "SELECT a_email,a_attempts_TL,a_first_pass,a_second_pass,a_third_pass FROM t_admin WHERE a_email='$email'
AND a_first_pass='$password1' AND a_second_pass='$password2' AND a_third_pass='$password3';";
$result_search = $conn->query($sql_search);
if ($result_search->num_rows > 0)
{
  while($row = $result_search->fetch_assoc())
  {
         $admininfo = array("id"=>"$row['a_id']", "email"=>"$row['a_email']","attempts"=>"$row['a_attempts_TL']");
  }
}
else
{

  // show_result("error","incorrect email or passwords","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)


  //plus 1 attempts to that admin
  $admininfo['attempts']++;
  $thequery = "UPDATE t_admin SET `a_attempts_TL`= '$admininfo['attempts']' WHERE `a_id`='$admininfo['id']';";
  if ($conn->query($thequery) === TRUE)
  {
       show_result("success","Admin (id=$id) has been updated","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
  }
  else
  {
       $te = convert_error_2str($conn->error);
       show_result("error","$te","","","Lc Melody","current");
  }

}


//function validation protect sql injection and validate data
function insql($p1,$p2,$p3,$p4) //parameters for login (4)
{
  $output = array();
  //do something to detect and remove sql injection codes from input parameters--------------------------------------------------
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
