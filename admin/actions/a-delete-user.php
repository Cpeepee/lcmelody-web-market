<?php require "./includes/header.php";

$id = $_GET['id'];
$mode = $_GET['mode'];

$id = (int)$id;

  if($mode=="admin")
  {





    $products_to_delete = array();
    $select_pro = "SELECT p_id FROM t_product WHERE `p_creator_aid`'$id';";
    $result_select_pro = $conn->query($select_pro);
    if ($result_select_pro->num_rows > 0)
    {
      while($row = $result_select_pro->fetch_assoc())
      {
        array_push($products_to_delete,$row['p_id']);
      }
    }




        foreach ($products_to_delete as $value)
        {
          $del_cartlist = "DELETE FROM t_cart_list WHERE `cl_p_id`='$value';";
          if ($conn->query($del_cartlist) === FALSE)
          {
            $te = convert_error_2str($conn->error);
            show_result("error","$te","","","Lc Melody","current");
          }

          $del_order_items = "DELETE FROM t_orders_items WHERE `oi_p_id`='$value';";
          if ($conn->query($del_order_items) === FALSE)
          {
            $te = convert_error_2str($conn->error);
            show_result("error","$te","","","Lc Melody","current");
          }
        }


    $del_comment_v = "DELETE FROM t_comment_verified WHERE `cv_p_id`='$id';";
    if ($conn->query($del_comment_v) === FALSE)
    {
      $te = convert_error_2str($conn->error);
      show_result("error","$te","","","Lc Melody","current");
    }

    $del_comment_c = "DELETE FROM t_comment_confirm WHERE `cc_p_id`='$id';";
    if ($conn->query($del_comment_c) === FALSE)
    {
      $te = convert_error_2str($conn->error);
      show_result("error","$te","","","Lc Melody","current");
    }




            foreach ($products_to_delete as $value)
            {
              $delete_product = "DELETE FROM t_product WHERE `p_creator_aid`='$value';";
              if ($conn->query($delete_product) === FALSE)
              {
                $te = convert_error_2str($conn->error);
                show_result("error","$te","","","Lc Melody","current");
              }
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

        $del_cartlist = "DELETE FROM t_cart_list WHERE `cl_c_id`='$id';";
        if ($conn->query($del_cartlist) === FALSE)
        {
          $te = convert_error_2str($conn->error);
          show_result("error","$te","","","Lc Melody","current");
        }



        $orders_to_delete = array();
        $select_order = "SELECT o_id FROM t_orders WHERE `o_owner_cid`'$id';";
        $result_search_select_order = $conn->query($select_order);
        if ($result_search_select_order->num_rows > 0)
        {
          while($row = $result_search_select_order->fetch_assoc())
          {
            array_push($orders_to_delete,$row['o_id']);
          }
        }

        foreach ($orders_to_delete as $value)
        {
          $del_order_items = "DELETE FROM t_orders_items WHERE `oi_o_id`='$value';";
          if ($conn->query($del_order_items) === FALSE)
          {
            $te = convert_error_2str($conn->error);
            show_result("error","$te","","","Lc Melody","current");
          }
        }


        $del_order = "DELETE FROM t_orders WHERE `o_owner_cid`='$id';";
        if ($conn->query($del_order) === FALSE)
        {
          $te = convert_error_2str($conn->error);
          show_result("error","$te","","","Lc Melody","current");
        }
  }

require "./includes/footer.php";?>
