<?php
function getPhotoPostByPhotoLink($photoLink)
{
    $url = "https://www.instagram.com/p/".$photoLink."/?__a=1";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    $result = curl_exec($ch);
    curl_close($ch);
    return json_decode($result);
}
