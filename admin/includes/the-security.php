<?php
session_start();
$adminUrlAddress ="http://localhost/lc/admin/"; //this code is also in header and

if(isset($_SESSION["user_type"]) && $_SESSION["user_type"] === "3e64Bli1LebFB13a7e240de6b54IR44c4413161400")
{
  if(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true)
  {
    if(isset($_SESSION["s_admin_id"]))
    {
      //the user is admin!
    }
  }
}
else
{
  ?><script> window.location = "<?php echo $adminUrlAddress;?>login.php"; </script><?php
}
?>
