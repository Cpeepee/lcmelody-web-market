<?php require "./includes/header.php";

$id = $_GET['id'];
$mode = $_GET['mode'];
if ($id== "" ||$mode== "")
{
  show_result("error","لطفا مقادیر معتبر را وارد کنید","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
}

$id = (int)$id;

  if($mode=="admin")
  {
    $delete_admin = "DELETE FROM t_admin WHERE `a_id`='$id';";
    if ($conn->query($delete_admin) === TRUE)
    {
      show_result("success","مدیر با موفقیت حذف شد","","","Lc Melody","current");

    }
    else
    {
      $te = convert_error_2str($conn->error);
      show_result("error","مدیر حذف نشد <br/>.$te","","","Lc Melody","current");
    }
  }


  else
  {
    $delete_customer = "DELETE FROM t_customer WHERE `c_id`='$id';";
    if ($conn->query($delete_customer) === TRUE)
    {
      show_result("success","مشتری با موفقیت حذف شد","","","Lc Melody","current");

    }
    else
    {
      $te = convert_error_2str($conn->error);
      show_result("error","مشتری حذف نشد <br/>.$te","","","Lc Melody","current");
    }
  }

require "./includes/footer.php";?>
