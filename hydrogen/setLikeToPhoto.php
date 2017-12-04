<?php
//This is the connection to DB.
include "connect.php";

if (isset($_GET['q'])) {
    $q = ($_GET['q']);
} else {
    $q = "";
}
if (isset($_GET['ip'])) {
    $ip = ($_GET['ip']);
} else {
    $ip = "";
}
if (isset($_GET['city'])) {
    $city = ($_GET['city']);
} else {
    $city = "";
}
if (isset($_GET['country_code'])) {
    $country_code = ($_GET['country_code']);
} else {
    $country_code = "";
}
if (isset($_GET['longitude'])) {
    $longitude = ($_GET['longitude']);
} else {
    $longitude = 1;
}
if (isset($_GET['latitude'])) {
    $latutide = ($_GET['latitude']);
} else {
    $latutide = 1;
}
if (isset($_GET['caption'])) {
    $caption = ($_GET['caption']);
} else {
    $caption = "";
}
if (isset($_GET['username'])) {
    $username = ($_GET['username']);
} else {
    $username = "";
}
if (isset($_GET['photoURL'])) {
    $photoURL = ($_GET['photoURL']);
} else {
    $photoURL = "";
}

$conn = getTheGalleryConnection();
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}
$nowFormat = date('Y-m-d H:i:s');

$sql = "INSERT INTO Likes(photoLink, date, ip, country_code, city, latitude, longitude, caption, username, photoURL) VALUES ('" . $q . "','" . $nowFormat . "','" . $ip . "','" . $country_code . "','" . $city . "'," . $latutide . "," . $longitude . ",'". $caption."','".$username."','".$photoURL ."')";
echo $sql;
if ($result = $conn->query($sql)) {
} else {
    die('Could not connect: ' . mysqli_error($conn));
}
mysqli_close($conn);
