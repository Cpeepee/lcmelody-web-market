<?php require "./includes/header.php";


    //fetch cart list
    $collector_product = array();
    $collector_amount = array();

    //fetch amount for minus amount product
    $collect_amount_avaliable = array();

    //fetch id and amount items in cart list customer
    $fetch_cartlist = "SELECT cl_p_id,cl_p_amount FROM t_cart_list WHERE `cl_c_id`='$customerSessionId';";
    $result_fetch_cartlist = $conn->query($fetch_cartlist);
    if ($result_fetch_cartlist->num_rows > 0)
    {
      while($row = $result_fetch_cartlist->fetch_assoc())
      {
          array_push($collector_product,$row['cl_p_id']);
          array_push($collector_amount,$row['cl_p_amount']);
      }
    }
    else
      show_result("error","error while load cart list maybe customer cart list is empty","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)


    //get that products information
    $collect_p_id = array();
    $collect_p_amount = array();
    $collect_p_price = array();
    $collect_p_discount = array();
    for ($i=0; $i <=count($collector_product)-1; $i++)
    {
      $sql_search = "SELECT p_amount,p_discount,p_price FROM t_product WHERE `p_id` = '$collector_product[$i]' AND `p_amount` >= '$collector_amount[$i]';";
      $result_search = $conn->query($sql_search);
      if ($result_search->num_rows > 0)
      {
        while($row = $result_search->fetch_assoc())
        {
            array_push($collect_amount_avaliable,$row['p_amount']);
            array_push($collect_p_id,$collector_product[$i]);
            array_push($collect_p_discount,$row['p_discount']);
            array_push($collect_p_amount,$collector_amount[$i]);
            array_push($collect_p_price,$row['p_price']);
        }
      }
      else
        show_result("error","product not found or this amount ur using are not avaliable right now in storage","","","Lc Melody","current");
    }


    //check amounts are enough
    $pid_amounts_not_available = array();
    for ($i=0; $i <=count($collector_product)-1; $i++)
    {
        if($collector_product[$i] != $collect_p_id[$i])
          array_push($pid_amounts_not_available,$collector_product[$i]);
    }



    /*------------------
    here can add code [use $pid_amounts_not_available array] in this case i dont use confirm message and just dont save that items as order item in order customer
        (to customer for that products are not enough amount do you want continue?)
    ------------------*/




    //save as an order
    $current_time = date("Y-m-d h-m-s");
    $save_as_order = "INSERT INTO t_orders (`o_owner_cid`,`o_date`) VALUES ('$customerSessionId','$current_time');";
    if ($conn->query($save_as_order) === FALSE)
          show_result("error","order is not created","","","Lc Melody","current");



    //give id that order we created just now
    $search_oid = "SELECT o_id FROM t_orders WHERE `o_owner_cid` = '$customerSessionId' AND `o_date` = '$current_time';";
    $result_search_oid = $conn->query($search_oid);
    if ($result_search_oid->num_rows > 0)
    {
      while($row = $result_search_oid->fetch_assoc())
      {
          $order_created_id = $row['o_id'];
      }
    }
    else
        show_result("error","order id is not found","","","Lc Melody","current");



    //add products avaliable from cart list to order items
    for ($a=0; $a <=count($collect_p_id)-1; $a++)
    {
      $add_item_to_order = "INSERT INTO t_orders_items (`oi_o_id`,`oi_p_id`,`oi_amount`,`oi_price`,`oi_discount`) VALUES ('$order_created_id','$collect_p_id[$a]','$collect_p_amount[$a]','$collect_p_price[$a]','$collect_p_discount[$a]');";
      if ($conn->query($add_item_to_order) === FALSE )
          show_result("error","a product can not add to order item!","","","Lc Melody","current");

      //minus amount product was added to an order (order item) from product table
      $new_amount_pro = $collect_amount_avaliable[$a] - $collect_p_amount[$a];
      $minus_amount_product = "UPDATE t_product SET `p_amount`='$new_amount_pro' WHERE `p_id`='$collect_p_id[$a]';";
      if ($conn->query($minus_amount_product) === FALSE)
          show_result("error","a product can not add to order item!","","","Lc Melody","current");
    }



    //delete items added to order from cart list customer
    for ($a=0; $a <=count($collect_p_id)-1; $a++)
    {
      $delete_from_cartlist = "DELETE FROM t_cart_list WHERE `cl_c_id` = '$customerSessionId' AND `cl_p_id` ='$collect_p_id[$a]';";
      if ($conn->query($delete_from_cartlist) === FALSE )
          show_result("error","can not remove added product to order from cart list","","","Lc Melody","current");
    }


    show_result("success","your order is created successfully","join","order.php?id=".$order_created_id,"Lc Melody","current");


require "./includes/footer.php";?>
