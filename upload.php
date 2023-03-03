<?php
  //upload.php
echo <<<_END
<html><head><title>PHP-forms for loading files on server</title>
</head><body><form method='post' action='upload.php'
 enctype='multipart/form-data'>
Choose a file like JPG, GIF, PNG or TIF:
 <input type='file' name='filename' size='10'>
<input type='submit' value='Load'></form>
_END;

if ($_FILES)
{
  $name = $_FILES['filename']['name'];

  switch($_FILES['filename']['type'])
  {
    case 'image/jpeg': $ext = 'jpg'; break;
      case 'image/gif': $ext = 'gif'; break;
        case 'image/png': $ext = 'png'; break;
          case 'image/tiff': $ext = 'tif'; break;
             default:        $ext = ''; break;
  }
  if ($ext)
  {
    $n = "image.$ext";
    move_uploaded_file($_FILES['filename']['tmp_name'], $n);
    echo "Loadering picture '$name' has name '$n':<br>";
    echo "<img src='$n'>";
  }
  else echo "'name' - error file of picture";
}
else echo "</body></html>";
?>
