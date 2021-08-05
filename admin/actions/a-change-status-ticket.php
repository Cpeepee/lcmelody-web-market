<?php require "./includes/header.php";

$id = $_GET['id'];
$tstatus = $_GET['status'];
$id = (int)$id;
$tstatus = (int)$tstatus;
if ($id== "" ||$tstatus== "")
{
  show_result("error","لطفا مقادیر معتبر را وارد کنید","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
}

 $thequery = "UPDATE t_ticket SET `t_status`= '$tstatus' WHERE `t_id`='$id';";

 if ($conn->query($thequery) === TRUE)
 {
    echo "success";
 }
 // else
 // {
   // echo "خطا در تغییر وضعیت تیکت";
 // }

require "./includes/footer.php";?>
