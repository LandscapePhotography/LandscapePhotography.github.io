<?php 

$i = $_GET['id'];
require_once '../data.php';

$title = $albums[$i][0];
$description = $albums[$i][3];
$location = $albums[$i][4];
$techdescr = $albums[$i][5];
$date = $albums[$i][6];
$img_dir = $albums[$i][1] . '/';
require("iframe/header.php"); 

//--- place images

if ($descr_next_to_img[$i] == "no"){
    $img = $img_dir . $images[$i][0];
    require("iframe/first_image.php"); 
}else{
    $img = $img_dir . $images[$i][0];
    require("iframe/first_image_square.php"); 
}

if (strpos($images[$i][1], 'a') == false){
    $img = $img_dir . $images[$i][1];
    require("iframe/normal_image.php"); 
}else{
    $img1 = $img_dir . $images[$i][1];
    $img2 = $img_dir . $images[$i][2];
    require("iframe/double_image.php"); 
}

$start_loop = 2;
$loop_until = count($images[$i]) - 1;
for ($x = $start_loop; $x <= $loop_until; $x++) {

    if (strpos($images[$i][$x], 'a') !== false) {
        $img1 = $img_dir . $images[$i][$x];
        $img2 = $img_dir . $images[$i][$x+1];
        require("iframe/double_image.php"); 
    }elseif (strpos($images[$i][$x], 'b') !== false) {
        $img1 = 'xxx';
    }else{
        $img = $img_dir . $images[$i][$x];
        require("iframe/lazy_image.php"); 
    }
    
}
//---

require("iframe/footer.php"); 


?>