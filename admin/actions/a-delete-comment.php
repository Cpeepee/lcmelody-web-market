<?php require "./includes/header.php";

$cid = $_GET['cid'];
$pid = $_GET['pid'];
$type = $_GET['t'];

$cid = (int)$cid;
$pid = (int)$pid;

  $thequery;
  if($type=="confirm")
    $thequery = "DELETE FROM t_comment_confirm WHERE `cc_c_id`='$cid' AND `cc_p_id`='$pid';";
  else
    $thequery = "DELETE FROM t_comment_verified WHERE `cv_c_id`='$cid' AND `cv_p_id`='$pid';";


  if ($conn->query($thequery) === TRUE)
       show_result("success","Comment (customer id=$cid , product id=$pid) deleted","","","Lc Melody","current");
  else
  {
    $te = convert_error_2str($conn->error);
    show_result("error","$te","","","Lc Melody","current");
  }

require "./includes/footer.php";?>
