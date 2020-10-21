<?php 
$i = $_GET['portfolio'];
require_once '../data.php';
$title = $albums[$i][0]; 
$iframe = 'iframe.php?id=' . $i;
$padding_bottom = $padding_bottom_portfolio[$i];
require("html/header.php"); // header 
require("html/navbar1/start.php"); // albums navbar
$link_i = 0;
foreach ($albums as $album) {
    $album_title = $album[0]; 
    $album_link = 'index.php?portfolio=' . $link_i;
    $album_cover = '../covers/' . $album[1] . '.jpg'; 
    $album_color = $album[2];
    require("html/navbar1/item.php");
    $link_i++;
}
require("html/navbar1/end.php");
?>

<iframe 
    name="iframe1" 
    id="iframe1" 
    src="<?php echo $iframe; ?>" 
    onload="setIframeHeight(this.id)" 
    frameborder="0" border="0" 
    cellspacing="0" 
    style="position: absolute; overflow:hidden;width:100%" 
    wmode="transparent" 
    scrolling="no">
</iframe>

<?php require("html/footer.php"); // footer ?>