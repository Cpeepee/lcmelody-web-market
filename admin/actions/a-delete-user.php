<?php require "./includes/header.php";

$id = $_GET['id'];
$mode = $_GET['mode'];

$id = (int)$id;

  if($mode=="admin")
  {
    $delete_admin = "DELETE FROM t_admin WHERE `a_id`='$id';";
    if ($conn->query($delete_admin) === TRUE)
    {
      show_result("success","admin (id=$id) deleted","","","Lc Melody","current");

    }
    else
    {
      $te = convert_error_2str($conn->error);
      show_result("error","$te","","","Lc Melody","current");
    }
  }


  else
  {
    $delete_customer = "DELETE FROM t_customer WHERE `c_id`='$id';";
    if ($conn->query($delete_customer) === TRUE)
    {
      show_result("success","customer (id=$id) deleted","","","Lc Melody","current");

    }
    else
    {
      $te = convert_error_2str($conn->error);
      show_result("error","$te","","","Lc Melody","current");
    }
  }

require "./includes/footer.php";?>
