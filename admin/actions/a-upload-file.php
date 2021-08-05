<?php require "./includes/header.php";

$target = $_POST['t'];
$id = $_POST['i'];
$place = $_POST['p'];

if ($target== "" ||$id== ""||$place== "")
{
  show_result("error","لطفا مقادیر معتبر را وارد کنید","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
}

$id = (int)$id;
$place = (int)$place;


// $uploaded_file = $_POST['uploaded_file'];


          switch ($target)
          {
            case 'p':
            {
              if(!empty($_FILES['uploaded_file']))
              {
                $directory = "../../assets/img/p-images/";
                $path = $directory;
                $path = $path . basename( $_FILES['uploaded_file']['name']);

                if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path))
                {
                  $placeChar;
                  switch ($place)
                  {
                    case 1:
                      $placeChar = "a";
                      break;

                    case 2:
                      $placeChar = "b";
                      break;

                    case 3:
                      $placeChar = "c";
                      break;

                    case 4:
                      $placeChar = "d";
                      break;

                    default:
                        show_result("error","مقدار ورودی نامعتبر","","","Lc Melody","current");
                      break;
                  }
                  $fileNameLen = strlen($path);
                  $fileUploadedType = substr($path,$fileNameLen - 4);
                  if($fileUploadedType != ".jpg")
                  {
                    show_result("error","فرمت تصویر باید .جی پی جی باشد","","","Lc Melody","current");
                  }
                  rename($path,$directory.$id."-".$placeChar.$fileUploadedType);
                  show_result("success","تصویر با موفقیت بارگذاری شد","","","Lc Melody","current");

                }

                else
                {
                    show_result("error","تصویر بارگذاری نشد","","","Lc Melody","current");
                }
              }
            }break;

            case 'ep':
            {
              if(!empty($_FILES['uploaded_file']))
              {
                $directory = "../../assets/img/p-images/";
                $placeChar;
                switch ($place)
                {
                  case 1:
                    $placeChar = "a";
                    break;

                  case 2:
                    $placeChar = "b";
                    break;

                  case 3:
                    $placeChar = "c";
                    break;

                  case 4:
                    $placeChar = "d";
                    break;

                  default:
                      show_result("error","مقدار ورودی نامعتبر","","","Lc Melody","current");
                    break;
                }
                if(file_exists($directory.$id."-".$placeChar))
                {
                  unlink($directory.$id."-".$placeChar);
                }
                $path = $directory;
                $path = $path . basename( $_FILES['uploaded_file']['name']);

                if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path))
                {
                  $fileNameLen = strlen($path);
                  $fileUploadedType = substr($path,$fileNameLen - 4);
                  if($fileUploadedType != ".jpg")
                  {
                    show_result("error","فرمت تصویر باید .جی پی جی باشد","","","Lc Melody","current");
                  }
                  rename($path,$directory.$id."-".$placeChar.$fileUploadedType);
                  show_result("success","تصویر با موفقیت بارگذاری شد","","","Lc Melody","current");
                }

                else
                {
                    show_result("error","تصویر بارگذاری نشد","","","Lc Melody","current");
                }
              }
            }break;

            case 'b':
            {
              if(!empty($_FILES['uploaded_file']))
              {
                $directory = "../../assets/img/banner/";
                $adminDirectory = "../assets/img/";
                if(file_exists($directory."header.jpg"))
                {
                  unlink($directory."header.jpg");
                }
                $path = $directory;
                $path = $path . basename( $_FILES['uploaded_file']['name']);

                if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path))
                {
                  $fileNameLen = strlen($path);
                  $fileUploadedType = substr($path,$fileNameLen - 4);
                  if($fileUploadedType != ".jpg")
                  {
                    show_result("error","فرمت تصویر بنر نامعتبر است باید .jpg باشد","","","Lc Melody","current");
                  }
                  rename($path,$directory."header.jpg");

                  //add banner for admin panel
                  unlink($adminDirectory."header.jpg");
                  copy($directory."header.jpg", $adminDirectory);

                  show_result("success","تصویر با موفقیت بارگذاری شد","","","Lc Melody","current");
                }

                else
                {
                    show_result("error","تصویر بارگذاری نشد","","","Lc Melody","current");
                }
              }
            }break;

            case 'ap':
            {
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
                  $sql_search = "SELECT tm_appendixes FROM t_ticket_admin_message WHERE `tm_id`='$id';";
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
                    $te = convert_error_2str($conn->error);
                    show_result("error","خطا در دریافت ضمیمه های پیام <br/>.$te","","","Lc Melody","current");
                  }




                  //append to appendix
                  $thequery = "UPDATE t_ticket_admin_message SET `tm_appendixes` = '$appendixes_old~$newUniName$fileUploadedType~' WHERE `tm_id`='$id';";
                  if ($conn->query($thequery) === FALSE)
                  {
                    $te = convert_error_2str($conn->error);
                    show_result("error","خطا در ویرایش ضمیمه پیام <br/>.$te","","","Lc Melody","current");
                  }
                  show_result("success","ضمیمه با موفقیت بارگذاری شد","","","Lc Melody","current");
                }
                else
                {
                    show_result("error","ضمیمه بارگذاری نشد","","","Lc Melody","current");
                }
              }
            }break;

            default:
            {
              show_result("error","خطایی رخ داده است","","","Lc Melody","current");
            }
              break;
          }

















require "./includes/footer.php";?>
