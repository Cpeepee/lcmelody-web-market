<?php require "./includes/header.php";

$tid = $_POST['tid'];
$text_response = $_POST['textResponse'];

if ($tid == "" || $text_response =="")
{
  show_result("error","لطفا مقادیر معتبر را وارد کنید","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
}


    $thequery1 = "INSERT INTO t_ticket_customer_message (tm_t_id,tm_c_id,tm_message_text) VALUES ('$tid','$customerSessionId','$text_response');";
    if ($conn->query($thequery1) === FALSE)
          show_result("error","پیام شما ارسال نشد","","","Lc Melody","current");



    //update status ticket to customer is waiting for answer
    $update_status_ticket = "UPDATE t_ticket SET `t_status` = '3' WHERE `t_id`='$tid';";
    if ($conn->query($update_status_ticket) === FALSE)
          show_result("error","خطایی در ویرایش وضعیت این تیکت رخ داده است","","","Lc Melody","current");



          $sql_search = "SELECT tm_id FROM t_ticket_customer_message WHERE `tm_t_id`='$tid' AND `tm_c_id`='$customerSessionId' AND `tm_message_text`='$text_response';";
          $result_search = $conn->query($sql_search);
          if ($result_search->num_rows > 0)
          {
            while($row = $result_search->fetch_assoc())
            {
                  ?>
                      <script>window.location=('../ticket-appendix.php?id=<?php echo $row['tm_id'];?>')</script>
                  <?php
            }
          }
          else
              show_result("error","خطا در هنگام دریافت شناسه تیکت رخ داده<br/>در حال حاضر امکان افزودن ضمیمه وجود ندارد","","","Lc Melody","current");


require "./includes/footer.php";?>
