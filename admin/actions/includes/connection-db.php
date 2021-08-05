$servername = "localhost";
$username = "me";
$password = "amx";
$dbname = "lc2";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
{
  $te = convert_error_2str($conn->connect_error);
  show_result("error","خطا در ارتباط با پایگاه داده <br/>.$te","","","Database Error","current");
}
