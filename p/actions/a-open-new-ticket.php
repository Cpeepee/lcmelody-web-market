<?php
require "../../includes/db-connection-without-session.php";


$title = $_POST['title'];
$email = $_POST['email']; //also can be cid
$textT = $_POST['textTicket'];

if ($title == ""|| $email == "" || $textT == "")
{
  show_result("error","لطفا مقادیر معتبر را وارد کنید","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
}


    $thequery1 = "INSERT INTO t_ticket (t_subject,t_email,t_main_text) VALUES ('$title','$email','$textT');";
    if ($conn->query($thequery1) === TRUE)
    {
          show_result("success","تیکت شما با موفقیت ارسال شد <br/>لطفا منتظر پاسخ پشتیبانی فروشگاه باشید","","","Lc Melody","current");

    }
    else
          show_result("error","خطا در هنگام ایجاد تیکت","","","Lc Melody","current");


require "./includes/footer.php";?>
