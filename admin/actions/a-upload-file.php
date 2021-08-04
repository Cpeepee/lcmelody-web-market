<?php require "./includes/header.php";

$target = $_POST['t'];
$id = $_POST['i'];
$place = $_POST['p'];
$uploaded_file = $_POST['selfile'];

//if empty all check or file is empty show error
if (empty($_POST))
{
  show_result("error","please enter inputs!","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
}



  //divide parts
  if(isset($_FILES[$targetname]))
  {
          switch ($target)
          {
            case 'p':
            {
              //check inputs requiered
              //upload
              //rename
              //add to table product field picuters (a-b-c-d)

              // target=p
              // id=pid
              // place=1
            }break;

            case 'ep':
            {
              //check inputs requiered

              //delete last file on that place
              //upload
              //rename


              // target=ep
              // id=pid
              // place=1-4
            }break;

            case 'b':
            {
              //check inputs requiered

              //check for last file for banner
              //if file exiedst remove that
              //upload file
              //rename file
              //make 1 b-stickt-top where bid = 0

              // banner: target=b
            }break;

            case 'ap':
            {
              //check inputs requiered

              // target=ap
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
  }









  function upload_file($file_input, $upload_dir = 'uploads/')
  {
  	if (!isset($_FILES[$file_input]))
    {
  		return false;
  	}

  	// return false if error occurred
  	$error = $_FILES[$file_input]['error'];

  	if ($error !== UPLOAD_ERR_OK)
    {
  		return false;
  	}

  	// move the uploaded file to the upload_dir
  	$new_file = $upload_dir . $_FILES[$file_input]['name'];

  	return move_uploaded_file(
  		$_FILES[$file_input]['tmp_name'],
  		$new_file
  	);
  }

  $status = upload_file('file');

  if ($status) {
  	echo 'The file has been uploaded successfully!';
  } else {
  	echo 'An error occurred during the file upload!';
  }
















require "./includes/footer.php";?>
