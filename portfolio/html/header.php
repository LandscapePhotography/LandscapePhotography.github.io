<!DOCTYPE html>
<html style="background-color:rgb(0, 0, 0)" >
<head>
  <meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title><?php echo $title; ?></title> <!-- EDIT TITLE HERE!! -->
  <meta name="generator" content="Mobirise v5.1.4, mobirise.com"><meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1"><link rel="shortcut icon" href="../assets/images/logo-white.svg" type="image/x-icon">
  <meta name="robots" content="index,follow"><meta name="description" content="Norway, Nikon, Selwyn Hoeks"> <!-- EDIT CONTENT HERE!!! -->
  <link rel="icon" href="../assets/logo/icon.svg"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css"><link rel="stylesheet" href="../assets/mobirise/css/style.css">
  <link rel="stylesheet" href="../assets/mobirise-gallery/style.css"><link rel="stylesheet" href="../assets/mobirise-slider/style.css">
  <link rel="preload" as="style" href="../assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="../assets/mobirise/css/mbr-additional.css" type="text/css">
  <!-- <style>
      #iframe1{height: 6500px;}
      @media (min-width:200px){#iframe1{height: 2000px;}}
      @media (min-width:300px){#iframe1{height: 2700px;}}
      @media (min-width:400px){#iframe1{height: 3500px;}}
      @media (min-width:500px){#iframe1{height: 4200px;}}
      @media (min-width:600px){#iframe1{height: 5000px;}}
      @media (min-width:700px){#iframe1{height: 5500px;}}
      @media (min-width:800px){#iframe1{height: 6300px;}}
      @media (min-width:900px){#iframe1{height: 6300px;}}
      @media (min-width:1000px){#iframe1{height: 6300px;}}
      @media (min-width:1200px){#iframe1{height: 6300px;}}
      @media (min-width:1300px){#iframe1{height: 6300px;}}
  </style> -->
  <script>
    function getDocHeight(doc) {
    doc = doc || document;
    // stackoverflow.com/questions/1145850/
    var body = doc.body, html = doc.documentElement;
    var height = Math.max( body.scrollHeight, body.offsetHeight, 
        html.clientHeight, html.scrollHeight, html.offsetHeight );
    return height;
    }
    function setIframeHeight(id) {
    var ifrm = document.getElementById(id);
    var doc = ifrm.contentDocument? ifrm.contentDocument: 
        ifrm.contentWindow.document;
    ifrm.style.visibility = 'hidden';
    ifrm.style.height = "10px"; // reset to minimal height ...
    // IE opt. for bing/msn needs a bit added or scrollbar appears
    ifrm.style.height = getDocHeight( doc ) + <?php echo $padding_bottom; ?> + "px";
    ifrm.style.visibility = 'visible';
    }
</script>
</head>
<body>