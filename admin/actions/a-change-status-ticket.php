<?php require "./includes/header.php";

$id = $_GET['id'];
$tstatus = $_GET['status'];
$id = (int)$id;
$tstatus = (int)$tstatus;


 $thequery = "UPDATE t_ticket SET `t_status`= '$tstatus' WHERE `t_id`='$id';";

 if ($conn->query($thequery) === TRUE)
 {
    echo "success";
 }
 else
 {
   echo "خطا در تغییر وضعیت تیکت";
 }

require "./includes/footer.php";?>
