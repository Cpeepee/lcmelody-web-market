<?php require "./includes/header.php";

$pid = $_GET['pid']; //product id
$oid = $_GET['oid']; //order id

if ($pid== "" ||$oid== "")
{
  show_result("error","لطفا مقادیر معتبر را وارد کنید","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
}

$pid = (int)$pid;
$oid = (int)$oid;

  $del_orderitem = "DELETE FROM t_orders_items WHERE `oi_p_id`='$pid' AND `oi_o_id`='$oid';";
  if ($conn->query($del_orderitem) === TRUE)
  {
      echo "success";
  }
  else
  {
    $te = convert_error_2str($conn->error);
    show_result("error","محصول از سفارش حذف نشد <br/>.$te","","","Lc Melody","current");
  }

require "./includes/footer.php";?>
