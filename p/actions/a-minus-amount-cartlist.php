<?php require "./includes/header.php";

$pid = $_GET['id'];
if ($pid == "")
{
  echo "invalid inputs";
}
      $sql_search = "SELECT cl_p_amount FROM t_cart_list WHERE `cl_p_id`='$pid' AND `cl_c_id`='$customerSessionId';";
      $result_search = $conn->query($sql_search);
      if ($result_search->num_rows > 0)
      {
        while($row = $result_search->fetch_assoc())
        {
            $cl_amount = $row['cl_p_amount'];
        }
      }
      else
        echo "error";



    $cl_amount--;
    $thequery1 = "UPDATE t_cart_list SET `cl_p_amount` = '$cl_amount' WHERE `cl_p_id`='$pid' AND `cl_c_id`='$customerSessionId';";
    if ($conn->query($thequery1) === TRUE)
    {
      echo "success";
    }
    else
    {
      echo "error";
    }


require "./includes/footer.php";?>
