<?php require "./includes/header.php";

$cid = $_GET['cid'];
$pid = $_GET['pid'];

$cid = (int)$cid;
$pid = (int)$pid;


  //fetch data that comment
  $sql_search = "SELECT cc_c_id,cc_p_id,cc_text,cc_date FROM t_comment_confirm WHERE `cc_c_id`='$cid' AND `cc_p_id`='$pid';";
  if ($conn->query($sql_search) === TRUE)
  {
    //create this comment on verified
    $thequery1 = "INSERT INTO t_comment_verified (cv_c_id,cv_p_id,cv_text,cv_date)
        VALUES ('$row['cc_c_id'],$row['cc_p_id'],$row['cc_text'],$row['cc_date']');";

    if ($conn->query($thequery1) === TRUE)
    {
        //remove comment from comfirm
        $thequery2 = "DELETE FROM t_comment_confirm WHERE `cc_c_id`='$cid' AND `cc_p_id`='$pid';";
        if ($conn->query($thequery2) === TRUE)
             show_result("success","Comment (customer id=$cid , product id=$pid) deleted","","","Lc Melody","current");
        else
        {
          $te = convert_error_2str($conn->error);
          show_result("error","$te","","","Lc Melody","current");
        }
    }

    else
    {
      $te = convert_error_2str($conn->error);
      show_result("error","$te","","","Lc Melody","current");
    }
  }
  else
  {
    $te = convert_error_2str($conn->error);
    show_result("error","$te","","","Lc Melody","current");
  }


require "./includes/footer.php";?>
