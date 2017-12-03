<?php
function getPhotoPostsByUsername($username="") {
if ($username!="") {
  $username=$_GET["username"];
}
else {
  $username = "BestShot.tk";

}
$url = "https://www.instagram.com/".$username."/?__a=1";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 20);
$result = curl_exec($ch);
curl_close($ch);
$result = json_decode($result);
return $result->user->media->nodes;
}

 ?>
