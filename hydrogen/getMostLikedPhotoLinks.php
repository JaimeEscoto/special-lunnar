<?php
//This is the connection to DB.
include "connect.php";

$conn=getTheGalleryConnection();
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}
$sql="SELECT photoLink, COUNT(date) as qty FROM Likes GROUP BY photoLink order by qty desc LIMIT 100";
if ($result = $conn->query($sql)) {
    return $result;
}
mysqli_close($conn);
?>
