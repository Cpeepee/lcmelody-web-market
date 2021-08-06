<?php require "./includes/header.php";

      $delete_customer = "DELETE FROM t_customer WHERE `c_id`='$customerSessionId';";
      if ($conn->query($delete_customer) === FALSE)
      {
        show_result("error","مشتری حذف نشد","","","Lc Melody","current");
      }


      $delete_ticket_customer_with_passive_id_dependency = "DELETE FROM t_ticket WHERE `t_email`='$customerSessionId';";
      if ($conn->query($delete_ticket_customer_with_passive_id_dependency) === TRUE)
      {
        show_result("success","مشتری با موفقیت حذف شد","","","Lc Melody","current");
      }
      else
      {
        show_result("error","مشتری حذف نشد","","","Lc Melody","current");
      }
      session_destroy();

require "./includes/footer.php";?>
