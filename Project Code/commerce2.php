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

  body
  { 
    background: url(http://files.cityweekend.com.cn/storage/article/images/sliders/shopping_6.jpg) no-repeat center fixed; 
    background-size: cover;
    background-size: 1350px 800px;
  }

  h1
  {
    color: green;
    font-family: algerian;
    font-size: 300%;
  
  }
   h2
  {
    color: black;
    font-family: algerian;
    font-size: 200%;
   
  }

</style>
</head>
<body>
  <h1 style="text-align: center;">National Institute of Technology, Karnataka</h1>
   <h2 style="text-align: center;">Co-Operative Society E-Portal</h2>
  <div class="dropdown"  style="float:left;">
    <button onclick="myFunction()" class="dropbtn">Choose your Option</button>
    <div id="myDropdown" class="dropdown-content">
      <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
      <a href="eatables1.php">Eatables</a>
      <a href="dailyuse.php">Stationary</a>
      <a href="homecleaning.php">Home and Hygiene</a>
      <a href="beauty.php">Personal care</a>    
      <a href="beverage.php">Beverages</a>  
    </div>
  </div>
<div class="dropdown" style="float:right;">
    <button class="dropbtn">Logout</button>
    <div class="dropdown-content">
      <a href="logout.php">Logout</a>
    </div>
  </div>


</body>                  
</html>  