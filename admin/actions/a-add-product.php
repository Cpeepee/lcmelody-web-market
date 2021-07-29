<?php require "./includes/header.php";

$ptitle = $_POST['p-title'];
$ptype = $_POST['p-type'];
$pdiscount = $_POST['p-discount'];
$pamount = $_POST['p-amount'];
$ppriority = $_POST['p-priority'];
$pstatus = $_POST['p-visible'];
$pbrand = $_POST['p-brand'];
$pmodel = $_POST['p-model'];
$pprice = $_POST['p-price'];
$ptechnical = $_POST['p-technical'];
$pdescriptions = $_POST['p-description'];


$pstatus = (int)$pstatus;
$ppriority = (int)$ppriority;
$pdiscount = (int)$pdiscount;
$pamount = (int)$pamount;

 // COMMENT DATA : p_status = pvisible , p_type = ptype (group (dastebandi)) ,p_summary_desc = p techincal
 $thequery = "INSERT INTO t_product (p_title,p_type,p_discount,p_amount,p_priority_TS,p_status,p_brand,p_model,p_price,p_summary_desc,p_description)
 VALUES ('$ptitle','$ptype','$pdiscount','$pamount','$ppriority','$pstatus','$pbrand','$pmodel','$pprice','$ptechnical','$pdescriptions')";

 if ($conn->query($thequery) === TRUE)
 {
      show_result("success","Product has been created.","","","Result add product Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
 }
 else
 {
   $te = convert_error_2str($conn->error);
   show_result("error","$te","","","Result add product Lc Melody","current");
 }

require "./includes/footer.php";?>
