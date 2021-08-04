<?php require "./includes/header.php";

$message_response = $_POST['response'];
$ticket_id = $_POST['tid'];
//$adminid = admin key frop session get


 $thequery = "INSERT INTO t_ticket_admin_message (tm_t_id,tm_a_id,tm_message_text)
 VALUES ('$ticket_id','1','$message_response');"; // admin id must use here but i wrote that to deafult 0
 if ($conn->query($thequery) === FALSE)
 {
   $te = convert_error_2str($conn->error);
   show_result("error","$te","","","response ticket Lc Melody","current");
 }

    //goto page appendixes upload
    ?>
      <script>
          window.location=('../ticket-appendix.php?tid=<?php echo $ticket_id?>;');
      </script>

<?php require "./includes/footer.php";?>
