<?php require "./includes/header.php";

$id = $_POST['i'];

if ($id== "")
{
  show_result("error","لطفا مقادیر معتبر را وارد کنید","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
}

$id = (int)$id;
// $place = (int)$place;

              if(!empty($_FILES['uploaded_file']))
              {
                $newUniName = uniqid();
                $directory = "../../assets/appendixes/";
                $path = $directory;
                $path = $path . basename( $_FILES['uploaded_file']['name']);

                if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path))
                {
                  $fileNameLen = strlen($path);
                  $fileUploadedType = substr($path,$fileNameLen - 4);
                  rename($path,$directory.$newUniName.$fileUploadedType);


                  //fetch last appendix value
                  $sql_search = "SELECT tm_appendixes FROM t_ticket_customer_message WHERE `tm_id`='$id' AND `tm_c_id`='$customerSessionId';";
                  $result_search = $conn->query($sql_search);
                  if ($result_search->num_rows > 0)
                  {
                    while($row = $result_search->fetch_assoc())
                    {
                       $appendixes_old = $row['tm_appendixes'];
                    }
                  }
                  else
                  {
                    show_result("error","خطا در دریافت ضمیمه های پیام","","","Lc Melody","current");
                  }




                  //append to appendix
                  if($appendixes_old=="0" || $appendixes_old==""|| $appendixes_old ==" ")
                  {
                    $thequery = "UPDATE t_ticket_admin_message SET `tm_appendixes` = '$newUniName$fileUploadedType~' WHERE `tm_id`='$id';";
                  }
                  else
                  {
                    $thequery = "UPDATE t_ticket_admin_message SET `tm_appendixes` = '$appendixes_old$newUniName$fileUploadedType~' WHERE `tm_id`='$id';";
                  }
                  if ($conn->query($thequery) === FALSE)
                  {
                    show_result("error","خطا در ویرایش ضمیمه پیام","","","Lc Melody","current");
                  }
                  show_result("success","ضمیمه با موفقیت بارگذاری شد","","","Lc Melody","current");
                }
                else
                {
                    show_result("error","ضمیمه بارگذاری نشد","","","Lc Melody","current");
                }
              }


require "./includes/footer.php";?>
