<?php

function getTheGalleryConnection()
{
  $servername = "mysql.hostinger.com";
  $servername = "sql129.main-hosting.eu";
  $database = "u884313671_tg01";
  $username = "u884313671_jaime";
  $password = "pfymBX808U6b";
  $conn = new mysqli($servername, $username, $password, $database);
  return $conn;
}


 ?>
