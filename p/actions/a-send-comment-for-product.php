<?php require "./includes/header.php";

$pid = $_POST['pid'];
$comment = $_POST['commentText'];

if ($pid == "" || $comment =="")
{
  show_result("error","لطفا مقادیر معتبر را وارد کنید","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
}


    //check exists comments verfied for that product by this customer
    $check_comment_verified = "SELECT cc_date FROM t_comment_verified WHERE `cv_p_id`='$pid' AND `cv_c_id`='$customerSessionId';";
    $result_comment_verified = $conn->query($check_comment_verified);
    if ($result_comment_verified->num_rows > 0)
      show_result("error","شما برای این محصول قبلا نظر ثبت کرده اید","","","Lc Melody","current");


    //check exists comments confirm for that product by this customer
    $check_comment_confirms = "SELECT cc_date FROM t_comment_confirm WHERE `cc_p_id`='$pid' AND `cc_c_id`='$customerSessionId';";
    $result_comment_confirms = $conn->query($check_comment_confirms);
    if ($result_comment_confirms->num_rows > 0)
      show_result("error","شما برای این محصول قبلا نظر ثبت کرده اید<br/>نظر شما پس از تایید توسط مدیر نمایش داده خواهد شد","","","Lc Melody","current");



    $thequery1 = "INSERT INTO t_comment_confirm (cc_c_id,cc_p_id,cc_text) VALUES ('$customerSessionId','$pid','$comment');";
    if ($conn->query($thequery1) === TRUE)
          show_result("success","نظر شما با موفقیت ثبت شد<br/>پس از تایید توسط مدیر به نمایش داده خواهد شد","","","Lc Melody","current");
    else
          show_result("error","نظر ثبت نشد","","","Lc Melody","current");



require "./includes/footer.php";?>
