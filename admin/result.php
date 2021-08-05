<?php
$mode = $_GET['mode'];
$text = $_GET['text'];
$button = $_GET['button'];
$target = $_GET['target'];
$title = $_GET['title'];

if ($mode== "")
{
  show_result("error","لطفا مقادیر معتبر را وارد کنید","","","Lc Melody","current"); //mode , text , button lable , button target ,title , window (current)
}

$color_mode = "message-success";
$icon_name = "error-45.png";
switch ($mode)
{
  case 'warning':
    {
      $color_mode = "message-warning";
      $icon_name = "warning-45.png";
    }
    break;

    case 'success':
      {
        $color_mode = "message-success";
        $icon_name = "success-45.png";
      }
      break;

      case 'error':
        {
          $color_mode = "message-error";
          $icon_name = "error-45.png";
        }
        break;


  default:
  {

  }
    break;
}

?>

<!DOCTYPE html>
<html dir="rtl">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/banner.css">
    <link rel="stylesheet" href="../assets/css/result.css">
    <title><?php echo $title;?></title>
  </head>
    <body>
      <div id="main-divider">
        <img id="logo" class="unselectable cursor-pointer" src="../assets/img/banner/logo.png" alt="logo">

        <h1></h1>
        <div class="unselectable">
          <img id="situation-icon" src="../assets/img/icons/<?php echo $icon_name;?>" alt="situation">
        </div>


        <h3 id="<?php echo $color_mode;?>">
          <?php echo $text;?>
        </h3>

        </script>
        <?php
        if($button!="")
        {
          ?>
          <div id="button" class="unselectable cursor-pointer" onclick="window.location=('<?php echo $target;?>');">
            <h4 id="button-text"><?php echo $button?></h4>
          </div>
          <br/><br/>
          <?php
        }
        ?>

      </div>
    </body>
</html>
