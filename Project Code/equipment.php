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
  <h1 style="text-align: center;">Office Equipments</h1>
  <table>
    <tr>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/s/t/st5.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/c/a/casio_sl-760lb.jpg" width="300px" height="300px" align="right" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/F/C/FC-100V.jpg" width="300px" height="300px"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://stationeryshop.in/global/media/catalog/product/cache/1/thumbnail/300x400/9df78eab33525d08d6e5fb8d27136e95/n/b/nbb.jpg" width="300px" height="300px"></td>

    </tr>
    <tr>
      <td><h2 style="text-align: center;">Basic Stationery Set</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Casio SL-760LB Portable Calculator</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Casio FC-100V</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Imported 10x Lanyard ID Badge Keys Phone Neck Strap Plastic Lobster Clasp Style</h2></td>
    </tr>
   <tr>
    <td>
      <img src="http://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/H/D/HD-10D_1.jpg" width="300px" height="300px" align="right" />
    </td>
   </tr>
   <tr>
    <td>
      <h2 style="text-align: center;">Kangaro Stapler HD-10D</h2>
    </td>
   </tr>
  </table>

</body>                  
</html>  