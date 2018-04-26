<?php
require 'connect.php';
$con = mysqli_connect("localhost","root","","hostel");
session_start(); 
$ROLL = $_SESSION['sess_username']
?>
<html>
<head>
<style>

  .button 
  {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 2px 2px;
    cursor: pointer;
    position: absolute;
  }

  .wrapper 
  {
    text-align: center;
  }

  a:link, a:visited 
  {
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
  }

  a:hover, a:active 
  {
    background-color: red;
  }

  ul 
  {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: green;
  }

  li 
  {
    float: left;
  }

  li a 
  {
    display: block;
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;
  }

  li a:hover 
  {
    background-color: #111111;
  }

  .dropbtn 
  {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
  }

  .dropdown 
  {
    position: relative;
    display: inline-block;
  }

  .dropdown-content 
  {
    display: none;
    position: absolute;
    right: 0;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }

  .dropdown-content a 
  {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .dropdown-content a:hover 
  {
    background-color: #f1f1f1
  }

  .dropdown:hover .dropdown-content 
  {
    display: block;
  }

  .dropdown:hover .dropbtn 
  {
    background-color: #3e8e41;
  }

 

  h1
  {
    color: blue;
    font-family: algerian;
    font-size: 300%;
  }

</style>
</head>
<body>
  <h1 style="text-align: center;">Writing Supplies</h1>
  <table>
    <tr>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/r/e/reynolds-045-pen-blue-pack-of-10.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/U/B/UB-185_BLUE_1.jpg" width="300px" height="300px" align="right" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/thumbnail/300x400/9df78eab33525d08d6e5fb8d27136e95/c/g/cgrp1.jpg" width="300px" height="300px"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/U/B/UB-177_BLACK_1.jpg" width="300px" height="300px"></td>

    </tr>
    <tr>
      <td><h2 style="text-align: center;">Reynolds 045 Carbure Pen - Pack of 10</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Uniball Vision Needle - UB 185</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Cello Gripper-1 Ball Pen, Blue - Pack of 10</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Uniball Deluxe - UB 177</h2></td>
    </tr>
    <tr>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/thumbnail/600x/17f82f742ffe127f42dca9de82fb58b1/t/o/top02.jpg.74861b2863.999x600x550.jpg.34db6895dd.999x600x550.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/p/a/parker-timeline-ball-pen-sdl509803893-1-62acf.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/thumbnail/300x400/9df78eab33525d08d6e5fb8d27136e95/v/e/vector_metal.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/v/e/vector.jpg" width="300px" height="300px" /></td>
    </tr>
    <tr>
      <td><h2 style="text-align: center;">Cello Topball Click Retractable Ballpoint Pen (Pack of 10)</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Parker Beta Millenium GT with Swiss Knife Ball Pen</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Parker Vector Mettalix CT Roller Ball Pen (Blue) +Free Swiss Knife</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Parker Vector Crystal Special Edition Roller Ball Pen 1 Piece Any Body Color</h2></td>
    </tr>
    <tr>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/C/A/CARBON-BLACK.jpeg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/2/B/2B-TRILOBE.jpeg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
       <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/7/7/777-05_3.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/S/Y/SY-P216_1.jpg" width="300px" height="300px" /></td>
    </tr>
    <tr>
      <td><h2 style="text-align: center;">Classmate Pencil Regular 2B Carbon Black Pack of 10</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Classmate Trilobe Blue Pencil Pack of 10</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Graphite 777 07 Mechanical Pencil</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Correction Pen - Regular Pack of 3</h2></td>
    </tr>
    <tr>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/thumbnail/300x400/9df78eab33525d08d6e5fb8d27136e95/n/a/natraj-sharpener.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/1/5/1503000355200_1.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/t/e/textsurfer_classic_364wp6_highliter.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/2/2/228-L18_1.jpg" width="300px" height="300px" /></td>
    </tr>
    <tr>
      <td><h2 style="text-align: center;">Nataraj 621 Sharpener(Pack Of 20)</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Nataraj 621 Plasto Erasers - 40 Pcs</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Textsurfer Classic 364WP6 Highliter</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Luna Twist up 228 L18 Wax Crayons</h2></td>
    </tr>
  </table>

</body>                  
</html>  