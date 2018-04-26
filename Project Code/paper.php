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
  <h1 style="text-align: center;">PAPER PRODUCTS</h1>
  <table>
    <tr>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/thumbnail/300x400/9df78eab33525d08d6e5fb8d27136e95/v/i/visitor_book_3.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/2/0/2001094.jpg" width="300px" height="300px" align="right" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/9/1/91lukv6zdtl._sl1500_.jpg" width="300px" height="300px"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/2/2/2250058.jpg" width="300px" height="300px"></td>

    </tr>
    <tr>
      <td><h2 style="text-align: center;">Lotus Visitor Book</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Classmate Practical Note Book - Chemistry Single Line/Blank(Standard) Pack of 6</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">JK Copier Paper - A4, 500 Sheets, 75 GSM, 10 Ream</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Classmate Impression 5 Subject Single Line Pack of 1</h2></td>
    </tr>
    <tr>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/H/P/HPG264A4-20_2.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/1/9/19.5_x_16_cm.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/thumbnail/300x400/9df78eab33525d08d6e5fb8d27136e95/e/n/env_1.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/thumbnail/300x400/9df78eab33525d08d6e5fb8d27136e95/m/p/mpp6.jpg" width="300px" height="300px" /></td>
    </tr>
    <tr>
      <td><h2 style="text-align: center;">High Resolution Photo Glossy Paper, 264 GSM, A4 Size, 20 Sheets Pack</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">LOTUS GRAPH NOTE BOOK (SMALL) Pack of 12</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Stageman Business Envelope White - Eco Series Pack of 100 Pcs</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Stageman Multiprpose A4 Color Paper - 20 Sheets. 200 GSM</h2></td>
    </tr>
    <tr>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/thumbnail/300x400/9df78eab33525d08d6e5fb8d27136e95/b/e/ben3.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/2/0/2000202_1.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/0/2/02100125.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/R/E/RESA61SC.jpg" width="300px" height="300px" /></td>
    </tr>
    <tr>
      <td><h2 style="text-align: center;">Bilt Matrix Executive Series Notebook</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Classmate Longbook Single Line Pack of 6</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Classmate Notebook Single Line Pack of 1</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">BILT Matrix Premium Notebook - A6 - Single Subject</h2></td>
    </tr>
    <tr>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/2/0/2000322_1.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/thumbnail/600x/17f82f742ffe127f42dca9de82fb58b1/9/0/9064.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/N/A/NA552.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/S/P/SP4480_2.jpg" width="300px" height="300px" /></td>
    </tr>
    <tr>
      <td><h2 style="text-align: center;">Classmate Pocket MemoSingle Line Pack of 5</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Deli Super Stick on Colourful Flags</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Solo Note Book (100 pages) - 2 Colour Printing</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">1/6 Spiral Pad (19x22.5cm-80 Sheets</h2></td>
    </tr>
  </table>

</body>                  
</html>  