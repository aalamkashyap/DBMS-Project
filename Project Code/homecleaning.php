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
  <h1 style="text-align: center;">HOME AND HYGIENE</h1>
  <table>
    <tr>
      <td><img src="https://rukminim1.flixcart.com/image/1408/1408/j4n1x8w0/mop-set/h/g/k/dcpdflr050aqgr0004-spotzero-by-milton-original-imaevgeghrrkf3ug.jpeg?q=90" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://3.imimg.com/data3/RB/AX/MY-12212466/gala-no-dust-broom-250x250.jpg" width="300px" height="300px" align="right" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://www.kartgoal.com/assets/images/brands/rb/colin/colin%20glass%20cleaner%20250%20ml.jpg" width="300px" height="300px"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://images-na.ssl-images-amazon.com/images/I/91uZ%2BSFo0dL._SX342_.jpg" width="300px" height="300px"></td>

    </tr>
    <tr>
      <td><h2 style="text-align: center;">Classic Spin Mop</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Gala Broom</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Colin Glass Cleaner</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Scotch Brite Sponge Wipe</h2></td>
    </tr>
    <tr>
      <td><img src="https://cdn.grofers.com/app/images/products/full_screen/pro_221860.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://ll-us-i5.wal.co/asr/f448acc5-1c3b-44e8-9a84-47a6dd1aeab6_1.0e6220aebf6138c697ba831417f9fb08.jpeg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://2.wlimg.com/product_images/bc-full/dir_97/2897601/watermark/harpic-1169102.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://www.samsgroceria.com/media/sonettoimages/8888071125523_10013057_true_1_760x760.jpg" width="300px" height="300px" /></td>
    </tr>
    <tr>
      <td><h2 style="text-align: center;">Good Night Mosquito Repellent</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Trash Bags</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Harpic Toilet Cleaner</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Harpic Power Bluematic In-Cistern Toilet Bowl Cleaner</h2></td>
    </tr>
    <tr>
      <td><img src="https://media.irely.in/media/catalog/product/cache/1/image/800x/9df78eab33525d08d6e5fb8d27136e95/s/u/surf-excel-matic-from-load-detergent-powder-1kg.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://www.itzmychoice.com/wp-content/uploads/2017/01/Surf-Excel-Detergent-Powder-Easy-Wash.png" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://www.itzmychoice.com/wp-content/uploads/2017/01/Surf-Excel-Detergent-Powder-Quick-Wash.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://www.kakasmartshopee.com/wp-content/uploads/2016/12/Surf-Excel-Detergent-Stain-Eraser-4-x-200g-Pack-0.jpg" width="300px" height="300px" /></td>
    </tr>
    <tr>
      <td><h2 style="text-align: center;">Surf Excel Matic Front Load Detergent Powder</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Surf Excel Blue Easy Wash Detergent Powder</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Surf Excel Detergent Powder Quick Wash</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Surf Excel Detergent Bar</h2></td>
    </tr>
    <tr>
      <td><img src="http://www.comfortsoftener.co.za/Images/3549/3549-1239074-comfort-aromatherapy-teaser.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://cdn.grofers.com/app/images/products/normal/pro_374481.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://images-na.ssl-images-amazon.com/images/I/41IkAkZb1aL.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://images-na.ssl-images-amazon.com/images/I/61Z6BLQm6PL._SY355_.jpg" width="300px" height="300px" /></td>
    </tr>
    <tr>
      <td><h2 style="text-align: center;">Comfort Fabric Conditioner</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Vim Bar</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Vim Liquid</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Scotch Brite Scrub Pad</h2></td>
    </tr>
     <tr>
      <td><img src="http://www.donovanbros.com/images/products/1518triplesofty3plytoilettissue166sheets1z9.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://ghk.h-cdn.co/assets/cm/15/11/1600x800/54ff2c9ce4e38-ghk-kirland-signature-paper-towels-s2.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://www.dhresource.com/0x0s/f2-albu-g1-M01-A5-89-rBVaGFbX3aCATboAAAT8TIaQKjg871.jpg/aluminum-foil-roll-silver-paper-food-wrap.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://3.imimg.com/data3/EY/XY/MY-14263549/dettol-hand-wash-250x250.jpg" width="300px" height="300px" /></td>
    </tr>
    <tr>
      <td><h2 style="text-align: center;">Toilet Tissue</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Kitchen Towel</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Aluminium Foil</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Dettol Hand Wash</h2></td>
    </tr>
  </table>

</body>                  
</html>  