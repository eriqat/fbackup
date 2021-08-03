<?php
// Include the database configuration file
include 'imageconfig.php';
session_start(); //declare you are starting a session
//  $_SESSION['targetDir'] = $targetDi/r; //Assign a value to the session
//  $dirname = $_SESSION['dirname'];
//  $dirname = $_SESSION['directory'];
// Get images from the database
$query = $db->query("SELECT * FROM images ORDER BY uploaded_on DESC");
$dirname = 'uploads/'. $_SESSION['username'] . '/' ;
$images = glob($dirname."*.*");

foreach($images as $image) {
    echo '<html>
    <head>
    <meta charset="UTF-8">
    <title>Display images</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
    <style>
    div.gallery {
      margin: 5px;
      border: 1px solid #ccc;
      float: left;
      width: 180px;
    }
    
    div.gallery:hover {
      border: 1px solid #777;
    }
    
    div.gallery img {
      width: 100%;
      height: auto;
    }
    
    div.desc {
      padding: 15px;
      text-align: center;
    }
    </style>
    </head>
    <body>
    
    <div class="gallery">
        <a target="_blank" href="'.$image.'">
        <img src="'.$image.'"  width="600" height="400">
      </a>
    </div>';
}
?>
