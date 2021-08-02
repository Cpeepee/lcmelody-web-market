<?php require "./includes/header.php";

$cid = $_GET['cid'];
$pid = $_GET['pid'];

$cid = (int)$cid;
$pid = (int)$pid;

  //create this comment on verified
  $thequery = "DELETE FROM t_comment_confirm WHERE `cc_c_id`='$cid' AND `cc_p_id`='$pid';";
  if ($conn->query($thequery) === TRUE)
       show_result("success","Comment (customer id=$cid , product id=$pid) deleted","","","Lc Melody","current");
  else
  {
    $te = convert_error_2str($conn->error);
    show_result("error","$te","","","Lc Melody","current");
  }


  //remove comment from comfirm

  

require "./includes/footer.php";?>
