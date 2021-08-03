<?php require "./includes/header.php";

$pid = $_GET['id'];
$pid = (int)$pid;

  $thequery = "DELETE FROM t_product WHERE `p_id`='$pid';";
  if ($conn->query($thequery) === TRUE)
  {
    $delete_comments_confirm = "DELETE FROM t_comment_confirm WHERE `p_id`='$pid';";
    if ($conn->query($thequery) === TRUE)
    {
      show_result("success","product (id=$pid) deleted","","","Lc Melody","current");
    }
  }
  else
  {
    $te = convert_error_2str($conn->error);
    show_result("error","$te","","","Lc Melody","current");
  }

require "./includes/footer.php";?>
