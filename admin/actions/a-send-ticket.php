<?php require "./includes/header.php";

$message_response = $_POST['response'];
$ticket_id = $_POST['tid'];
$adminSessionId = $_SESSION["s_admin_id"];

if ($message_response== "" ||$ticket_id== "")
{
  show_result("error","لطفا مقادیر معتبر را وارد کنید","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
}


//$adminid = admin key frop session get


 $thequery = "INSERT INTO t_ticket_admin_message (tm_t_id,tm_a_id,tm_message_text)
 VALUES ('$ticket_id','$adminSessionId','$message_response');"; // admin id must use here but i wrote that to deafult 0
 if ($conn->query($thequery) === FALSE)
 {
   $te = convert_error_2str($conn->error);
   show_result("error","خطا در افزودن پیام <br/>.$te","","","response ticket Lc Melody","current");
 }


 //fetch ticket message id
 $sql_search = "SELECT tm_id FROM t_ticket_admin_message WHERE tm_message_text = '$message_response' AND tm_t_id= '$ticket_id'";
 $result_search = $conn->query($sql_search);
 if ($result_search->num_rows > 0)
 {
   while($row = $result_search->fetch_assoc())
   {
          $tmid = $row['tm_id'];
   }
 }
 else
 {
   $te = convert_error_2str($conn->error);
   show_result("error","شناسه تیکیت پیدا نشد <br/>.$te","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
 }
    //goto page appendixes upload
    ?>
      <script>
          window.location=('../ticket-appendix.php?tid=<?php echo $ticket_id?>&tmid=<?php echo $tmid;?>;');
      </script>

<?php require "./includes/footer.php";?>
