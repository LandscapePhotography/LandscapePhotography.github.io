<?php 

// landing page cover img
$cover_path = "covers/page_cover.jpg";

// all albums img
$all_albums_cover_img = $cover_path;

// color of all albums button
$all_albums_button_color = "#334f45";  // forestgreen

// select the spotlight albums, make sure they have a description
$spotlight_albums = array(0, 1, 3); 

// array that holds the album information, format => array(title, id, color, description, location, techdescr, date)
$albums = array( 
    array("Hidden Waters","2020_09","#334f45",
    "Following the flow of hidden waters fed by the late summer rains.","Bavaria, Germany",
    "Photos were taken with a Fujifilm X-T20 with Fujifilm 16-50mm f3.5-5.6 OIS2 lens, a Sony A7R with a Sony 24-70mm f3.5-5.6 lens, and a Nikon D700 with a Nikon 50mm f1.8G lens.","September 2020"), // forestgreen
    array("Forest Ember","2020_08", "#5d5030",
    "An early morning exploration of familiar surroundings.", "Berg en Dal, Nijmegen",
    "Photos were shot using a Canon A-1 with a Sigma 35-70mm f2.8-4 lens on Fujifilm C200 film.","August 2020"), // mossgreen
    array("Green Shelter","2020_07", "#47462a", 
    "Finding shelter in the forest during a drizzling summer weekend hike.", "Dwingelderveld",
    "Images were shot using a Nikon FG-20 and a Nikon EM with a 50mm f1.8 and a 28mm f2.8 on Fujicolor C200 film.","August 2020"), // browngreen
    array("Morning Bloom","2020_06", "#B77F53",
    "Photographing blooming heathlands warmed by the morning radiance.", "Drunense Duinen",
    "Images were shot using a Hasselblad 500cm with a 80mm Carl Zeiss f2.8 on Kodak Ektar 100 film.","August 2020"), // sunriseorange
    array("Blue Mountains","2012_01", "#414d51", 
    "Revisiting a collection of photos taken during a three day hike through the Blue Mountains.", "Australia", 
    "Photos were shot using a Nikon CoolPix S6300 point and shoot.","Februari 2012"), // darkgrey
    array("Forest Glow","2020_05", "#44403f", 
    "Capturing the soft light peaking through the forest canopy on a nice Sunday morning.", "Mook Molenhoek", 
    "Photos were shot using a Yashica-Mat 6×6 (1957) with a 80mm Yashinon f3.5 on Rollei RPX 400 film.", "May 2020"), // lightsepia
    array("Catching The Light","2015_01", "#334f45", 
    "Revisit of an older collection of photos shot in autumn 2015.", "Lunteren", 
    "Photos were made with a Nikon CoolPix P510.", "July 2015"), // forestgreen
    array("Rainy Holidays","2010_01", "#5d5030", 
    "Revisit of an older collection of photos shot during the summer of 2010.", "Norway", 
    "Photos were made using a Nikon CoolPix S6300 point and shoot.","July 2010"), // mossgreen
    array("Moody Dutch Fens","2020_04", "#414d51", 
    "Capturing the reflection of a moody fen landscape.", "Hatertse Vennen", 
    "Photos were shot using a Nikon F100 with a 50mm f1.8G lens on Kodak Gold 200 film.","April 2020"), // darkgrey
    array("Changing Landscapes","2020_03", "#7D695D", 
    "Hiking through some characteristic Dutch landscape of interchanging forests and grasslands.", "Veluwezoom",
    "Photos were shot using a Zenza Bronica ETRS and 75mm f2.8 lens on expired Ilford Delta 100 film.","March 2020"), // sepiabw
    array("Sand, Sea And Sunsets","2020_01", "#ae8171", 
    "Strolling along the beaches of Ameland to capture the contrast of the cold, windy beaches warmed by romantic evening skies.", "Ameland", 
    "Photos were shot using a Fujifilm X-T20 and Fujifilm 50-230mm f4.5-6.7 OIS2 lens or a Nikon D7100 and Nikon 50mm f1.8 series E lens.","March 2020"), // greypink
    array("Yosemite","2019_01", "#414d51", 
    "Enjoying the scenetic landscapes of Yosemite National Park while visting family.", "California", 
    "Photos were shot with a Nikon F5 and Nikon 50mm f1.8G lens on Fujicolor C200 film.","September 2019") // darkgrey
);

// set if album description should be displayed next to first image or not (yes for square images)
$descr_next_to_img = array("no","no","yes","yes","yes","yes","no","no","no","yes","no","yes");
$padding_bottom_portfolio = array("40","40","1000","1000","350","1000","40","40","40","400","40","40");

// list images included in album
$images = array(
    array("01.jpg","02.jpg","03.jpg","04a.jpg","04b.jpg","05.jpg","06.jpg","07.jpg","08.jpg","09.jpg","10.jpg","11a.jpg","11b.jpg","12.jpg"),
    array("01.jpg","02a.jpg","02b.jpg","03a.jpg","03b.jpg","04.jpg","05a.jpg","05b.jpg","06.jpg","07.jpg"),
    array("01.jpg","02.jpg","03.jpg","04.jpg","05.jpg","06.jpg"),
    array("01_hq.jpg","04_hq.jpg","03_hq.jpg","02_hq.jpg","7.jpg"),
    array("01.jpg","02.jpg","03a.jpg","03b.jpg","04.jpg","05.jpg","06.jpg","07.jpg"),
    array("01.jpg","02.jpg","03.jpg","04.jpg","05.jpg","06.jpg","07.jpg"),
    array("01.jpg","02a.jpg","02b.jpg","03.jpg","04.jpg","05a.jpg","05b.jpg","06.jpg","07.jpg"),
    array("01.jpg","02.jpg","03a.jpg","03b.jpg","04.jpg","05.jpg","06.jpg","07.jpg","08.jpg","09.jpg"),
    array("01.jpg","02a.jpg","02b.jpg","03.jpg","04.jpg","05a.jpg","05b.jpg","06a.jpg","06b.jpg","07.jpg"),
    array("01.jpg","02.jpg","03.jpg","99.jpg","04.jpg","05.jpg","06.jpg"),
    array("01.jpg","02.jpg","03.jpg","04.jpg","05a.jpg","05b.jpg","06.jpg","07.jpg"),
    array("Yosemite_02_BW.jpg","Yosemite_03_BW.jpg","Yosemite_01comb_BW_a.jpg","Yosemite_01comb_BW_b.jpg","Yosemite_04_BW.jpg","Yosemite_05_BW.jpg","Yosemite_07_BW.jpg"),
);

?>