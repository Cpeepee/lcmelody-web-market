<?php require "./includes/header.php";

$id = $_GET['id'];
$id = (int)$id;


    $del_product = "DELETE FROM t_product WHERE `p_id`='$id';";
    if ($conn->query($del_product) === TRUE)
    {
      show_result("success","محصول با موفقیت حذف شد","","","Lc Melody","current");
    }
    else
    {
      $te = convert_error_2str($conn->error);
      show_result("error","محصول حذف نشد <br/>.$te","","","Lc Melody","current");
    }


require "./includes/footer.php";?>
