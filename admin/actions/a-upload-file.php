<?php require "./includes/header.php";

$target = $_POST['t'];
$id = $_POST['i'];
$place = $_POST['p'];
$uploaded_file = $_POST['selfile'];

//if empty all check or file is empty show error




  //divide parts
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

require "./includes/footer.php";?>
