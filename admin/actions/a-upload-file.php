<?php require "./includes/header.php";

$target = $_POST['t'];
$id = $_POST['i'];
$place = $_POST['p'];

$id = (int)$id;
$place = (int)$place;


// $uploaded_file = $_POST['uploaded_file'];

//if empty all check or file is empty show error
if (empty($_POST))
{
  show_result("error","please enter inputs!","","","Lc Melody","current");
}

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
                        show_result("error","Place value is invalid","","","Lc Melody","current");
                      break;
                  }
                  $fileNameLen = strlen($path);
                  $fileUploadedType = substr($path,$fileNameLen - 4);
                  rename($path,$directory.$id."-".$placeChar.$fileUploadedType);
                  show_result("success","تصویر با موفقیت بارگذاری شد","","","Lc Melody","current");

                }

                else
                {
                    show_result("error","There was an error uploading the file","","","Lc Melody","current");
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
                      show_result("error","Place value is invalid","","","Lc Melody","current");
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
                  rename($path,$directory.$id."-".$placeChar);
                  show_result("success","تصویر با موفقیت بارگذاری شد","","","Lc Melody","current");
                }

                else
                {
                    show_result("error","There was an error uploading the file","","","Lc Melody","current");
                }
              }
            }break;

            case 'b':
            {
              if(!empty($_FILES['uploaded_file']))
              {
                $directory = "../../assets/img/banner/";
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
                    show_result("error","banner picture format must be .jpg","","","Lc Melody","current");
                  }
                  rename($path,$directory."header.jpg");
                  show_result("success","تصویر با موفقیت بارگذاری شد","","","Lc Melody","current");
                }

                else
                {
                    show_result("error","There was an error uploading the file","","","Lc Melody","current");
                }
              }
            }break;

            case 'ap':
            {
              // id= //ticket id
              // place=1-4
              // adminid
            }break;

            default:
            {
              //error
            }
              break;
          }

















require "./includes/footer.php";?>
