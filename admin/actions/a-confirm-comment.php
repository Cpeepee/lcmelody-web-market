<?php require "./includes/header.php";

$cid = $_GET['cid'];
$pid = $_GET['pid'];
if ($cid== "" ||$pid== "")
{
  show_result("error","لطفا مقادیر معتبر را وارد کنید","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
}


$cid = (int)$cid;
$pid = (int)$pid;

  //fetch comment from confirm
  $sql_search = "SELECT cc_text,cc_date FROM t_comment_confirm WHERE `cc_c_id`='$cid' AND `cc_p_id`='$pid';";
  $result_search = $conn->query($sql_search);
  if ($result_search->num_rows > 0)
  {
    while($row = $result_search->fetch_assoc())
    {
        $cctext = $row['cc_text'];
        $ccdate = $row['cc_date'];
    }
  }
  else
  {
    $te = convert_error_2str($conn->error);
    show_result("error","خطا در دریافت متن و تاریخ نظر <br/>.$te","","","Lc Melody","current");
  }


  //create this comment on verified
  $thequery1 = "INSERT INTO t_comment_verified (cv_c_id,cv_p_id,cv_text,cv_date)
      VALUES ('$cid','$pid','$cctext','$ccdate');";
  if ($conn->query($thequery1) === FALSE)
  {
    $te = convert_error_2str($conn->error);
    show_result("error","خطا در ثبت نظر  <br/>.$te","","","Lc Melody","current");
  }

  //remove comment from confirm
  $thequery2 = "DELETE FROM t_comment_confirm WHERE `cc_c_id`='$cid' AND `cc_p_id`='$pid';";
  if ($conn->query($thequery2) === TRUE)
       show_result("success","نظر با موفقیت تایید شد","","","Lc Melody","current");
  else
  {
    $te = convert_error_2str($conn->error);
    show_result("error","خطا در حذف نظر  <br/>.$te","","","Lc Melody","current");
  }



require "./includes/footer.php";?>
