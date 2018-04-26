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
  <h1 style="text-align: center;">CHIPS</h1>
  <table>
    <tr>
      <td><img src="https://4.imimg.com/data4/IN/UV/MY-8928950/lays-250x250.jpg" width="350px" height="350px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://wereview.in/wp-content/uploads/2015/03/maxx-1024x524.jpg" width="300px" height="350px" align="right" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtKFCq2EV_Dsq42R7uewgQEhf42djOM0IEIjgkx38L6CLjZ2QC" width="250px" height="250px"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKqiaL6_6WOT1kTHEOXNp4459-A1m6iroSR-wGvn14OV00xcMr" width="350px" height="350px"></td>

    </tr>
    <tr>
      <td><h2 style="text-align: center;">Lays</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Lays MAXX</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Uncle Chips</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Kurkure</h2></td>
    </tr>
    <tr>
      <td><img src="http://www.indiareviewchannel.com/attachments/products/16897__262321__bingo1b.jpg" width="350px" height="350px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://cdn.marketing91.com/wp-content/uploads/2016/09/yumitoes-3-a8033b4f5fc99d5.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://d77r3ym80c2os.cloudfront.net/File_30302_26_Free-Bingo-Tangles.jpg" width="250px" height="250px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://www.brandsynario.com/wp-content/uploads/cheetos.jpg" width="350px" height="350px" /></td>
    </tr>
    <tr>
      <td><h2 style="text-align: center;">Bingo Mad Angles</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Bingo Yumitos</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Bingo Tangles</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Cheetos</h2></td>
    </tr>
    <tr>
      <td><img src="http://www.indiagrocery.in/wp-content/uploads/2016/08/Haldiram-Chips-Classic-Salted.jpg" width="350px" height="350px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://news.bfnn.co.uk/wp-content/uploads/2015/11/Pringles-1024x408.jpg" width="300px" height="350px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTuByscF0vpnPqQqWt7HA4rd6sha6E62P4t4JUz3eDPnXVs-08" width="250px" height="250px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://www.couponing101.com/wp-content/uploads/2015/07/doritos_fix_package_detail_01.jpg" width="350px" height="350px" /></td>
    </tr>
    <tr>
      <td><h2 style="text-align: center;">Haldiram Chips</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Pringles</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Ruffles</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Doritos</h2></td>
    </tr>
  </table>

</body>                  
</html>  