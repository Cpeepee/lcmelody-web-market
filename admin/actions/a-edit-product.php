<?php require "./includes/header.php";

$id = $_POST['pid'];
$ptitle = $_POST['ptitle'];
$pgroup = $_POST['pgroup'];
$pdiscount = $_POST['pdiscount'];
$pamount = $_POST['pamount'];
$pprioirty = $_POST['ppriority'];
$pvisible = $_POST['pvisible'];
$pbrand = $_POST['pbrandd'];
$pmodel = $_POST['pmodel'];
$pprice = $_POST['pprice'];
$ptechincal = $_POST['ptechincal'];
$pdescription = $_POST['pdescription'];
$id = (int)$id;

 $thequery = "UPDATE t_product SET `p_title` = '$ptitle',`p_type`= '$pgroup',
 `p_discount`= '$pdiscount',`p_amount`= '$pamount',`p_priority_TS`= '$pprioirty',`p_status`= '$pvisible' ,
 `p_brand` = '$pbrand',`p_model` = '$pmodel',`p_price` = '$pprice', `p_summary_desc` = '$ptechincal',
 `p_description` = '$pdescription'  WHERE `p_id`='$id';";

 if ($conn->query($thequery) === TRUE)
 {
      show_result("success","Product (id=$id) updated","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
 }
 else
 {
   $te = convert_error_2str($conn->error);
   show_result("error","$te","","","Lc Melody","current");
 }

require "./includes/footer.php";?>
