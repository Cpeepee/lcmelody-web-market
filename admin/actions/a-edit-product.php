<?php require "./includes/header.php";

$id = $_POST['pid'];
$ptitle = $_POST['ptitle'];
$pgroup = $_POST['pgroup'];
$pdiscount = $_POST['pdiscount'];
$pamount = $_POST['pamount'];
$ppriority = $_POST['ppriority'];
$pvisible = $_POST['pvisible'];
$pbrand = $_POST['pbrandd'];
$pmodel = $_POST['pmodel'];
$pprice = $_POST['pprice'];
$ptechnical = $_POST['ptechincal'];
$pdescription = $_POST['pdescription'];


if ($id=="" || $ptitle == "" || $pgroup == "" || $pdiscount == "" || $pamount == "" || $ppriority == "" || $pvisible == "" || $pbrand == "" || $pmodel == "" || $pprice == "" || $ptechnical == "" || $pdescription == "")
{
  show_result("error","لطفا مقادیر معتبر را وارد کنید","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
}



$id = (int)$id;
$ppriority = (int)$ppriority;
$pvisible = (int)$pvisible;

$pdiscount = str_replace(" ","",$pdiscount);
$pdiscount = str_replace(",","",$pdiscount);
$pdiscount = str_replace(".","",$pdiscount);
$pprice = str_replace(" ","",$pprice);
$pprice = str_replace(".","",$pprice);
$pprice = str_replace(",","",$pprice);


 $thequery = "UPDATE t_product SET `p_title` = '$ptitle',`p_type`= '$pgroup',
 `p_discount`= '$pdiscount',`p_amount`= '$pamount',`p_priority_TS`= '$ppriority',`p_status`= '$pvisible' ,
 `p_brand` = '$pbrand',`p_model` = '$pmodel',`p_price` = '$pprice', `p_summary_desc` = '$ptechincal',
 `p_description` = '$pdescription'  WHERE `p_id`='$id';";

 if ($conn->query($thequery) === TRUE)
 {
      show_result("success","محصول با موفقیت ویرایش شد","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
 }
 else
 {
   $te = convert_error_2str($conn->error);
   show_result("error","محصول با ویرایش نشد <br/>.$te","","","Lc Melody","current");
 }

require "./includes/footer.php";?>
