<?php require "./includes/header.php";

$id = $_GET['id'];
$id = (int)$id;

  $del_comment_cv = "DELETE FROM t_comment_verified WHERE `cv_p_id`='$id';";
  if ($conn->query($del_comment_cv) === FALSE)
  {
    $te = convert_error_2str($conn->error);
    show_result("error","$te","","","Lc Melody","current");
  }

  $del_comment_cc = "DELETE FROM t_comment_confirm WHERE `cc_p_id`='$id';";
  if ($conn->query($del_comment_cc) === FALSE)
  {
    $te = convert_error_2str($conn->error);
    show_result("error","$te","","","Lc Melody","current");
  }

  $del_cartlist = "DELETE FROM t_cart_list WHERE `cl_p_id`='$id';";
  if ($conn->query($del_cartlist) === FALSE)
  {
    $te = convert_error_2str($conn->error);
    show_result("error","$te","","","Lc Melody","current");
  }

  $del_orderitems = "DELETE FROM t_orders_items WHERE `oi_p_id`='$id';";
  if ($conn->query($del_orderitems) === FALSE)
  {
    $te = convert_error_2str($conn->error);
    show_result("error","$te","","","Lc Melody","current");
  }


    $del_product = "DELETE FROM t_product WHERE `p_id`='$id';";
    if ($conn->query($del_product) === FALSE)
    {
      $te = convert_error_2str($conn->error);
      show_result("error","$te","","","Lc Melody","current");
    }


require "./includes/footer.php";?>
