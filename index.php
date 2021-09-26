<?php
session_start();
require_once(__DIR__ . "/system/config/config.php");
require_once(__DIR__ . "/system/config/analytics.php");
require_once(__DIR__ . "/system/functions.php");

if (!empty($_GET["lang"])){
  
  $_SESSION["lang"] = $_GET["lang"];

}


if(!isset($_SESSION["lang"])){

  include 'system/language/'.$config["site_lang"].'.php';

 
}else{

  include 'system/language/'.$_SESSION["lang"].'.php';
}



 ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $config["site_desc"]; ?>">
   <meta name="keywords" content="<?php echo $config["site_keyword"]; ?>">
    
    <link rel="shortcut icon" href="theme/img/favicon.png">
     <title><?php echo $config["site_name"]; ?></title>


    <meta itemprop="name" content="<?php echo $config["site_name"]; ?>">
    <meta itemprop="description" content="<?php echo $config["site_desc"]; ?>">
    <meta itemprop="image" content="theme/img/banner.jpg">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?php echo $config["site_name"]; ?>">
    <meta name="twitter:description" content="<?php echo $config["site_desc"]; ?>">
    <meta name="twitter:image:src" content="theme/img/banner.jpg">
    <meta property="og:title" content="<?php echo $config["site_name"]; ?>">
    <meta property="og:type" content="article">
    <meta property="og:image" content="theme/img/banner.jpg">
    <meta property="og:description" content="<?php echo $config["site_desc"]; ?>">
    <meta property="og:site_name" content="<?php echo $config["site_name"]; ?>">

   <link href="theme/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   
<? if ($config["site_theme"] = "theme3") { ?>
  
  <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="theme/theme3/css/boostrapv4.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="theme/theme3/css/mdb.css" rel="stylesheet">

<? }else{  ?>

 <!-- Bootstrap core CSS -->
    <link href="theme/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
   
    <link href="theme/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
   
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

<? } ?>


   


    <link href="theme/<?php echo $config["site_theme"]; ?>/css/theme.css" rel="stylesheet">

  </head>

  <body id="page-top">
<style>
.text-green{
  color: #28a745 !important;
}
.text-red{
color: #ff0000 !important;
}
.lang_menu{
padding:10px;
}
.lang_menu li{
  border-bottom:1px solid gainsboro;
}
.lang_menu li a{
  font-size: 90%;
    font-weight: 400;
    padding: .75em 0;
    letter-spacing: 1px;
    color: #100f17;
    font-family: Montserrat, 'Helvetica Neue', Helvetica, Arial, sans-serif;
}
</style>
  

    <?php include(__DIR__ . "/theme/".$config["site_theme"]."/header.php"); ?>


<?php include(__DIR__ . "/system/process/process.php"); ?>

<?php

if (!empty($_GET["page"])) {
  # code...
  ?> 
    <section id="content" class="features-icons services-bg text-center">
      <div class="container">
<?
  switch ($_GET["page"]) {
    case 'terms':
     include(__DIR__ . "/pages/terms.php");

      break;
       case 'sss':
     include(__DIR__ . "/pages/sss.php");

      break;
       case 'contact':
     include(__DIR__ . "/pages/contact.php");

      break;
    
  }
  ?>  
  </div>
</section>
  <?
}


 ?>
    
<? if ($config["site_services"]===true) { 
  # code...
  include(__DIR__ . "/theme/".$config["site_theme"]."/services.php");
}
?>

<?php  include (__DIR__ .'/system/config/analytics.php'); ?>
 
 <? 
  # code...
  include(__DIR__ . "/theme/".$config["site_theme"]."/footer.php");

?>

<script type="text/javascript">
  $(".okruac").on('click', function(event){
    console.log($(this).data("href"));

     window.open($(this).data("href"), "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=200,height=100");

   
    //(... rest of your JS code)
});
</script>

   