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

if ($ptitle == "" || $ptype == "" || $pdiscount == "" || $pamount == "" || $ppriority == "" || $pstatus == "" || $pbrand == "" || $pmodel == "" || $pprice == "" || $ptechnical == "" || $pdescriptions== "")
{
  show_result("error","لطفا مقادیر معتبر را وارد کنید","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
}

$pstatus = (int)$pstatus;
$ppriority = (int)$ppriority;
$pdiscount = (int)$pdiscount;
$pamount = (int)$pamount;

$pdiscount = str_replace(" ","",$pdiscount);
$pdiscount = str_replace(",","",$pdiscount);
$pdiscount = str_replace(".","",$pdiscount);
$pprice = str_replace(" ","",$pprice);
$pprice = str_replace(".","",$pprice);
$pprice = str_replace(",","",$pprice);

$adminSessionId = $_SESSION["s_admin_id"];
 // COMMENT DATA : p_status = pvisible , p_type = ptype (group (dastebandi)) ,p_summary_desc = p techincal
 $thequery = "INSERT INTO t_product (p_title,p_type,p_discount,p_amount,p_priority_TS,p_status,p_brand,p_model,p_price,p_summary_desc,p_description,p_creator_aid)
 VALUES ('$ptitle','$ptype','$pdiscount','$pamount','$ppriority','$pstatus','$pbrand','$pmodel','$pprice','$ptechnical','$pdescriptions','$adminSessionId');";//admin id is deautl to 1

 if ($conn->query($thequery) === FALSE)
 {
   $te = convert_error_2str($conn->error);
   show_result("error","خطا در ثبت محصول جدید <br/>.$te","","","Result add product Lc Melody","current");
 }

 //check product is exists and get that id
 $sql_search = "SELECT p_id FROM t_product WHERE p_title = '$ptitle' AND p_type = '$ptype' AND p_discount = '$pdiscount' AND p_brand = '$pbrand';";
 $result_search = $conn->query($sql_search);
 if ($result_search->num_rows > 0)
 {
   while($row = $result_search->fetch_assoc())
   {
     ?>
     <script>
         window.location=('../add-picture-to-product.php?id=<?php echo $row['p_id'];?>');
     </script>
     <?php
   }
 }
 else
 {
   $te = convert_error_2str($conn->error);
   show_result("error","خطا در پیدا کردن شناسه محصول جهت بارگذاری تصویر <br/>.$te","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
 }



require "./includes/footer.php";?>
