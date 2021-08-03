<?php require "./includes/header.php";

$id = $_GET['id'];
$mode = $_GET['mode'];

$id = (int)$id;

  if($mode=="admin")
  {
    $delete_product = "DELETE FROM t_product WHERE `p_creator_aid`='$id';";
    if ($conn->query($delete_product) === FALSE)
    {
      $te = convert_error_2str($conn->error);
      show_result("error","$te","","","Lc Melody","current");
    }


    $delete_ticket_message = "DELETE FROM t_ticket_admin_message WHERE `tm_a_id`='$id';";
    if ($conn->query($delete_ticket_message) === FALSE)
    {
      $te = convert_error_2str($conn->error);
      show_result("error","$te","","","Lc Melody","current");
    }
    //also delete appendixes



    $delete_admin = "DELETE FROM t_admin WHERE `a_id`='$id';";
    if ($conn->query($delete_admin) === FALSE)
    {
      $te = convert_error_2str($conn->error);
      show_result("error","$te","","","Lc Melody","current");
    }
  }
  else
  {
    //orders , customer
        $del_ticket_message = "DELETE FROM t_ticket_customer_message WHERE `tm_c_id`='$id';";
        if ($conn->query($del_ticket_message) === FALSE)
        {
          $te = convert_error_2str($conn->error);
          show_result("error","$te","","","Lc Melody","current");
        }

        $del_ticket = "DELETE FROM t_ticket WHERE `t_email`='$id';";
        if ($conn->query($del_ticket) === FALSE)
        {
          $te = convert_error_2str($conn->error);
          show_result("error","$te","","","Lc Melody","current");
        }

        $del_comment_v = "DELETE FROM t_comment_verified WHERE `cv_c_id`='$id';";
        if ($conn->query($del_comment_v) === FALSE)
        {
          $te = convert_error_2str($conn->error);
          show_result("error","$te","","","Lc Melody","current");
        }

        $del_comment_c = "DELETE FROM t_comment_confirm WHERE `cc_c_id`='$id';";
        if ($conn->query($del_comment_c) === FALSE)
        {
          $te = convert_error_2str($conn->error);
          show_result("error","$te","","","Lc Melody","current");
        }

        $del_comment_c = "DELETE FROM t_comment_confirm WHERE `cc_c_id`='$id';";
        if ($conn->query($del_comment_c) === FALSE)
        {
          $te = convert_error_2str($conn->error);
          show_result("error","$te","","","Lc Melody","current");
        }

        $del_cartlist = "DELETE FROM t_cart_list WHERE `cl_c_id`='$id';";
        if ($conn->query($del_cartlist) === FALSE)
        {
          $te = convert_error_2str($conn->error);
          show_result("error","$te","","","Lc Melody","current");
        }

        $del_cartlist = "DELETE FROM t_cart_list WHERE `cl_c_id`='$id';";
        if ($conn->query($del_cartlist) === FALSE)
        {
          $te = convert_error_2str($conn->error);
          show_result("error","$te","","","Lc Melody","current");
        }

        $select_order = "SELECT o_id FROM t_orders WHERE `o_owner_cid`'$id';";
        if ($conn->query($del_order_items) === TRUE)
        {
          $te = convert_error_2str($conn->error);
          show_result("error","$te","","","Lc Melody","current");
        }

        $del_order_items = "DELETE FROM t_orders_items WHERE `cl_c_id`='$id';";
        if ($conn->query($del_order_items) === FALSE)
        {
          $te = convert_error_2str($conn->error);
          show_result("error","$te","","","Lc Melody","current");
        }
  }

require "./includes/footer.php";?>
