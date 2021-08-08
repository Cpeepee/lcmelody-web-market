<?php require "./includes/header.php";




    //fetch cart list
    $fetch_cartlist = "SELECT cl_p_id,cl_p_amount FROM t_cart_list WHERE `cl_c_id`='$customerSessionId';";
    $result_fetch_cartlist = $conn->query($fetch_cartlist);
    if ($result_fetch_cartlist->num_rows > 0)
    {
      while($row = $result_fetch_cartlist->fetch_assoc())
      {

      }
    }
    else
      show_result("error","error while load cart list maybe customer cart list is empty","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)






$sql_search = "SELECT c_id,c_attempts_TL,c_email,c_password FROM t_customer WHERE `c_email` = '$email' AND `c_password` = '$password';";
$result_search = $conn->query($sql_search);
if ($result_search->num_rows > 0)
{
  while($row = $result_search->fetch_assoc())
  {
      $c_mail = $row['c_email'];
      $c_pass = $row['c_password'];
      $c_id = $row['c_id'];
      $c_attempts = $row['c_attempts_TL'];
  }
}
else
  show_result("error","incorrect email password","","","Lc Melody","current");


    $thequery1 = "UPDATE t_customer SET `c_FL_name`='$firstname $lastname',`c_phonenumer`='$phonenumber',`c_email`='$email',`c_address`='$address' WHERE `c_id`='$customerSessionId';";
    if ($conn->query($thequery1) === TRUE)
          show_result("success","customer edited","","","Lc Melody","current");
    else
          show_result("error","customer is not edit","","","Lc Melody","current");



require "./includes/footer.php";?>
