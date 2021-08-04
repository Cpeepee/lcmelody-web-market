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
                $path = "../../assets/img/p-images/";
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
                  $fileNameLen = strlen($_FILES['uploaded_file']['name']);
                  $fileUploadedType = substr($fileNameLen,$fileNameLen - 4);
                  rename($path.$_FILES['uploaded_file']['name'],$id."-".$placeChar.$fileUploadedType);
                  show_result("success","file uploaded for product","","","Lc Melody","current");

                }

                else
                {
                    show_result("error","There was an error uploading the file","","","Lc Melody","current");
                }
              }
            }break;

            case 'ep':
            {

              //delete last file on that place
              // target=ep
              // id=pid
              // place=1-4
            }break;

            case 'b':
            {
              //check for last file for banner
              //if file exiedst remove that
              //make 1 b-stickt-top where bid = 0

              // banner: target=b
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
