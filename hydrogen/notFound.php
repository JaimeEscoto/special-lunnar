<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ERROR</title>
  </head>
  <body>
    <?php
  header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
  //include("notFound.php");
  $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  echo $actual_link;

$nombres  = $actual_link;

// Divido el string de nombre de personas por los espacios
$nombres = explode("/", $nombres);
$url="";

echo $nombres[sizeof($nombres)-1]; // Juan
for ($i=1; $i < sizeof($nombres)-1  ; $i++) {

  if ($i>0) {
    # code...
  }
    $url=$url.$nombres[$i];
    if ($i>0) {
        $url=$url."/";
    }
}

$url= "http:/". $url."index.php?username=".$nombres[sizeof($nombres)-1]."&ga=1";
//$url = "http://bestshot.tk/MyGallery/index.php?user=".$nombres[sizeof($nombres)-1];
header('Location: '.$url, true, 303); exit;

  ?>
  </body>
</html>
