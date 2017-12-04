<?php
include "getPhotoPostByPhotoLink.php";
$mostLikedPhotoLinks = include 'getMostLikedPhotoLinks.php';
//bind to $name

$myResultArray=array();

while ($row = mysqli_fetch_array($mostLikedPhotoLinks)) {
    $myResultArray[] = $row;
}
echo json_encode($myResultArray);

//return json_encode($myResultArray);
