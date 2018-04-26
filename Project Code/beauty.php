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
  <h1 style="text-align: center;">PERSONAL CARE</h1>
  <table>
    <tr>
      <td><img src="https://img.makeupalley.com/0/4/5/7/2282391.JPG" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://images-eu.ssl-images-amazon.com/images/I/41XqcLblbRL.jpg" width="300px" height="300px" align="right" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://3.imimg.com/data3/OX/GE/MY-4492846/closeup-toothpaste-500x500.jpg" width="300px" height="300px"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://images-na.ssl-images-amazon.com/images/I/31U7z6qzZ9L._SX355_.jpg" width="300px" height="300px"></td>

    </tr>
    <tr>
      <td><h2 style="text-align: center;">Dove Cream Beauty Bathing Bar 100g </h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Colgate Strong Teeth With Cavity Protection Toothpaste 500gm Tube</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Closeup Deep Action Red Hot Toothpaste 300g Tube</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Parachute Coconut Oil 500ml Bottle</h2></td>
    </tr>
    <tr>
      <td><img src="http://justkirana.orderkibarsaat.com/wp-content/uploads/2016/04/1-8.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://www.needsthesupermarket.com/15047-thickbox_default/sensodyne-fresh-gel.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://www.chhotabazar.com/image/catalog/Sunsilk/2015-12-23-Pwl5HujJyfqXoDoTWK6M.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://images-eu.ssl-images-amazon.com/images/I/41Z-XqVxJHL._SY355_.jpg" width="300px" height="300px" /></td>
    </tr>
    <tr>
      <td><h2 style="text-align: center;">L'Oreal Paris Total Repair 5 Damaged Hair Shampoo 640ml Bottle</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Sensodyne Sensitive Soft Toothbrush Buy 2 Get 1 Free</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Sunsilk Nourishing Soft and Smooth Shampoo 650ml Bottle</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Pears Soft and Fresh Soap 125g</h2></td>
    </tr>
    <tr>
      <td><img src="http://www.theindianbeauty.com/wp-content/uploads/2016/01/best-lip-balms-india-3.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://images-na.ssl-images-amazon.com/images/I/51M-8xbcXmL._SY355_.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://metrofeel.com/images/detailed/28/8901296038550_105_1502716437.png" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://www.maddisonsuk.com/WebRoot/BT3/Shops/BT4896/5447/75D1/6D58/6601/7017/0A0C/05E8/FC66/johnsons_cotton_ear_buds.jpg" width="300px" height="300px" /></td>
    </tr>
    <tr>
      <td><h2 style="text-align: center;">Nivea Fruity Shine Cherry Lip Balm 4.8g</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Dove Hair Therapy - Hair Fall Rescue Conditioner, Shampoo, 650ml, Bottle</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Volini Expert Pain Relief Spray 143ml Bottle</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Cotton Ear Buds 100 Sticks 200 Swabs Pouch</h2></td>
    </tr>
    <tr>
      <td><img src="https://images-na.ssl-images-amazon.com/images/I/61ONvI--A2L._SY445_.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://5.imimg.com/data5/KW/TB/GLADMIN-17711224/veet-sensitive-skin-full-body-waxing-kit-20pcs-box-500x500.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://www.amcal.com.au/wcsstore/ExtendedSitesCatalogAssetStore/images/products/4005808828869_LL_1.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://thepinkblush.files.wordpress.com/2015/03/march-2015-bdj-box-ponds-flawless-brightening-night-cream.jpg" width="300px" height="300px" /></td>
    </tr>
    <tr>
      <td><h2 style="text-align: center;">Garnier Men Acno Fight Face Wash 100g Tube</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Veet Sensitive Skin Full Body Waxing Kit 20pcs Box</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Nivea Men Deodorant Cool Kick 50ml Bottle</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Pond's Flawless White Daily Cream 50g Box</h2></td>
    </tr>
    <tr>
      <td><img src="https://www.beautybase.com/images/himalaya-purifying-neem-face-wash-150ml-tube-p34607-8933_image.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://www.bajajcorp.com/images/img_03.png" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://www.spencers.in/media/catalog/product/cache/11/image/9df78eab33525d08d6e5fb8d27136e95/1/3/1302569p.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://bazarlec.com/image/cache/catalog/Products/Personel-care/deo-perfume/Cinthol-Deo-Stick-40gm-Intense-500x500.jpg" width="300px" height="300px" /></td>
    </tr>
    <tr>
      <td><h2 style="text-align: center;">Himalaya Herbals Neem Face Wash 150ml Tube</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Bajaj Brahmi Amla Hair Oil 200ml Bottle</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Bblunt-Salon-Secret-Natural-Black-Hair-Colour-100g</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Cinthol Energy Deo Stick Men 40gm Tube</h2></td>
    </tr>
  </table>

</body>                  
</html>  