<?php require "includes/header.php";

$qq = $_GET['aabbcc'];

 $thequery = "SELECT a_email FROM t_admin WHERE `a_id`='1';";
 if ($conn->query($thequery) === TRUE)
 {
    echo $row['a_email'];
      // show_result("success","Order (id=$id) updated","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
 }
 else
 {
   echo "nonono";
   // $te = convert_error_2str($conn->error);
   // show_result("error","s$te","","","Lc Melody","current");
 }

require "./includes/footer.php";?>
