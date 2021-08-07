<?php require "./includes/header.php";

$pid = $_POST['id'];

if ($pid == "")
{
  show_result("error","لطفا مقادیر معتبر را وارد کنید","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
}



    $thequery1 = "INSERT INTO t_cart_list (cl_c_id,cl_p_id,cl_p_amount) VALUES ('$customerSessionId','$pid','1');";
    if ($conn->query($thequery1) === TRUE)
    {
      ?>
          <script>window.location=('../my-cart.php');</script>
      <?php
    }
    else
          show_result("error","error while adding cart list maybe its exists","","","Lc Melody","current");



require "./includes/footer.php";?>
