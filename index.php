<?php 

require_once 'data.php';

$page_title = "Landscape Photography"; 
require("home/header.php"); // landing screen

require("home/navbar1/start.php"); // albums navbar
$link_i = 0;
foreach ($albums as $album) {
    $album_title = $album[0]; 
    $album_link = 'portfolio/?portfolio=' . $link_i;
    $album_cover = 'covers/' . $album[1] . '.jpg'; 
    $album_color = $album[2];
    require("home/navbar1/item.php");
    $link_i++;
}
require("home/navbar1/end.php");

require("home/logo.php"); // logos

$i = 1; // spotlight albums
foreach ($spotlight_albums as $v) {
    $album_title = $albums[$v][0];
    $album_link = 'portfolio/?portfolio=' . $v;
    $album_cover_HQ = 'covers/' . $albums[$v][1] . '_HQ.jpg'; 
    $album_color = $albums[$v][2];
    $album_description = $albums[$v][3];
    require("home/spotlight_albums.php");
    $i++;
}
require("home/all_albums.php");

require("home/navbar2/start.php"); // albums navbar2
$link_i = 0;
foreach ($albums as $album) { 
    $album_title = $album[0]; 
    $album_link = 'portfolio/?portfolio=' . $link_i;
    $album_cover = 'covers/' . $album[1] . '.jpg'; 
    $album_color = $album[2];
    require("home/navbar2/item.php");
    $link_i++;
}
require("home/navbar2/end.php");

require("home/footer.php"); // contact and footer
?>