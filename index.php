<!DOCTYPE html>
<html lang="fr" >
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">
    <title>ENTRAIDE & CULTURE</title>
    <link rel="stylesheet" href="css/style.css">
    <script type='text/javascript' href='js/script.js'></script>
    <script>window.console = window.console || function(t) {};</script>
    <script> if (document.location.search.match(/type=embed/gi)) {window.parent.postMessage("resize", "*");}</script>
    <!---------------links------------------->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Css files -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" />
    <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <!-- faviticon -->
    <link rel="apple-touch-icon" sizes="57x57" href="img/faviticon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/faviticon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/faviticon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/faviticon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/faviticon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/faviticon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/faviticon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/faviticon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/faviticon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/faviticon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/faviticon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/faviticon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/faviticon/favicon-16x16.png">
    <link rel="manifest" href="img/faviticon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/faviticon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!---------------start------------------->
</head>
<body translate="no" >
<div class="site-wrap">
    <div class="panel-wrap animate--none">
        <div class="globeyellow"><img src= "img/globe-yellow.png" alt=""/></div>
        <!---------------accueil------------------->
<?php include 'accueil.php';?>
    <!---------------présentation------------------->
<?php include 'presentation.php';?>
    <!---------------ancrage local------------------->
<?php include 'ancrage.php';?>
    <!---------------asbl mapping------------------->
<?php include 'asbl.php';?>
    <!---------------entraide------------------->
<?php include 'entraide.php';?>
    <!---------------culture------------------->
<?php include 'culture.php';?>
    <!---------------infos pratiques------------------->
<?php include 'infos.php';?>

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
<script src="js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="js/parallax.js" type="text/javascript"></script>
<script src="js/validate.js" type="text/javascript"></script>
<script src="js/jquery.twitter.js" type="text/javascript"></script>
<script src="js/myscript.js" type="text/javascript"></script>
<script>
    function texts(evt, textApp) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(textApp).style.display = "block";
        evt.currentTarget.className += " active";
    }
    function text(evt, textAp) {
        var i, tabcontent1, tablink;
        tabcontent1 = document.getElementsByClassName("tabcontent1");
        for (i = 0; i < tabcontent1.length; i++) {
            tabcontent1[i].style.display = "none";
        }
        tablink = document.getElementsByClassName("tablink");
        for (i = 0; i < tablink.length; i++) {
            tablink[i].className = tablink[i].className.replace(" active", "");
        }
        document.getElementById(textAp).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
<?php
include "js/script.js";
?>
</body>
</html>