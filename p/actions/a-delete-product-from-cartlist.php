<?php require "./includes/header.php";

$pid = $_GET['id'];
if ($pid == "")
{
  echo "invalid inputs";
}

    $thequery1 = "DELETE FROM t_cart_list WHERE `cl_p_id`='$pid' AND `cl_c_id`='$customerSessionId';";
    if ($conn->query($thequery1) === TRUE)
    {
      echo "success";
    }
    else
    {
      echo "error";
    }


require "./includes/footer.php";?>
