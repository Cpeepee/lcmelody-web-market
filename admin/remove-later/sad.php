<?php require "./includes/header.php";

$cid = $_GET['aabbcc'];


  //fetch data that comment
  $sql_search = "INSERT INTO t_banners (b_id) VALUES '5';";
  if ($conn->query($sql_search) === TRUE)
  {
    //create this comment on verified
    echo "ok";
  }
  else
  {
    echo "notok";
  }


require "./includes/footer.php";?>
