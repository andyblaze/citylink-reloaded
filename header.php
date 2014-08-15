<?php
//
//  Website: Citylink Reloaded
//  URL: http://citylink-reloaded.co.uk
//  Author: Benjamin Read / Blaze Communications
//  Author URL: http://blazecommunications.com
//  (c) 2014 Blaze Communications Ltd, all rights reserved
//
if(!isset($meta_desc)) {
$meta_desc = "CityLink Reloaded &#124; Home";
};
if(!isset($meta_key)) {
$meta_key = "#";
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $meta_desc;?>.">
    <meta name="author" content="city Link">
    <link rel="shortcut icon" href="favicon.png">

    <title><?php echo $page_title; ?></title>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Custom styles for this website -->
    <link href="css/citylink-rl.min.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-static-top" id="nav">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="img/citylink-logo.svg"></a>
           <button type="button" class="navbar-toggle btn-y" data-toggle="collapse" data-target=".navbar-collapse">
            Menu
          </button>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Direct Debit</a></li>
            <li><a href="#">ebilling</a></li>
            <li><a href="onourway.php">On Our Way</a></li>
            <li><a href="#">My City Link</a></li>
            <li><a href="#">International</a></li>
            <li><a href="#">eBooking</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
