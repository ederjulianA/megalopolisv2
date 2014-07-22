<?php

/**
 * Image resize
 * @param int $width
 * @param int $height
 */
function resize($width, $height,$empresa){
  /* Get original image x y*/
  list($w, $h) = getimagesize($_FILES['nuevo_logo']['tmp_name']);
  /* calculate new image size with ratio */
  $ratio = max($width/$w, $height/$h);
  $h = ceil($height / $ratio);
  $x = ($w - $width / $ratio) / 2;
  $w = ceil($width / $ratio);
  /* new file name */
  $path = '/img/empresas/'.$width.'x'.$height.'_'.$empresa.'-'.$_FILES['nuevo_logo']['name'];
  /* read binary data from image file */
  $imgString = file_get_contents($_FILES['nuevo_logo']['tmp_name']);
  /* create image from string */
  $image = imagecreatefromstring($imgString);
  $tmp = imagecreatetruecolor($width, $height);
  imagecopyresampled($tmp, $image,
    0, 0,
    $x, 0,
    $width, $height,
    $w, $h);
  /* Save image */
  switch ($_FILES['nuevo_logo']['type']) {
    case 'image/jpeg':
      imagejpeg($tmp, $path, 100);
      break;
    case 'image/png':
      imagepng($tmp, $path, 0);
      break;
    case 'image/gif':
      imagegif($tmp, $path);
      break;
    default:
      exit;
      break;
  }
  return $path;
  /* cleanup memory */
  imagedestroy($image);
  imagedestroy($tmp);
}