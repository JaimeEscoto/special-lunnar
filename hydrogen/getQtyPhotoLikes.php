<?php
//This is the connection to DB.
include "connect.php";

$q = ($_GET['q']);
$conn=getTheGalleryConnection();
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}
$sql="SELECT photoLink, COUNT(date) as qty FROM Likes  WHERE photoLink = '" . $q . "' GROUP BY photoLink";
if ($result = $conn->query($sql)) {
    while ($row = mysqli_fetch_array($result)) {
        echo $row['qty'];
    }
}
mysqli_close($conn);
?>
