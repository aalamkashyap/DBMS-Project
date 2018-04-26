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
  <h1 style="text-align: center;">Office Files and Folders</h1>
  <table>
    <tr>
      <td><img src="https://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/S/Y/SY-CF800.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/C/C/CC108.jpg" width="300px" height="300px" align="right" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/S/P/SP510.jpg" width="300px" height="300px"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/S/P/SP310.jpg" width="300px" height="300px"></td>

    </tr>
    <tr>
      <td><h2 style="text-align: center;">Handy Portfolio - with Pad</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Solo Secure Folder (With twin pocket)</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Solo Separatorz (With Index - Set of 10)</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Solo Separator / Divider (Set of 10) - Multi Colour</h2></td>
    </tr>
    <tr>
      <td><img src="https://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/S/Y/SY-CH120.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/S/Y/SY-612_1.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/S/Y/SY-012.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://stationeryshop.in/global/media/catalog/product/cache/1/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/S/Y/SY-101F_1.jpg" width="300px" height="300px" /></td>
    </tr>
    <tr>
      <td><h2 style="text-align: center;">Card Holder-Classic 240 cards</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Punchless Clip File A4 Timex Clip</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Chequebook Expanding</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Spring Clip File A4 Spring Clip</h2></td>
    </tr>
    
  </table>

</body>                  
</html>  