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
  <h1 style="text-align: center;">COOKIES AND BISCUITS</h1>
  <table>
    <tr>
      <td><img src="https://3.bp.blogspot.com/-u5e_PW6phbM/U-XHi1_I4TI/AAAAAAAAGbk/0c-ELwJEN4A/s1600/image.jpg" width="350px" height="350px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://i5.walmartimages.com/asr/f47f6b53-1b9f-4f9f-9fa3-72c76ae853a9_1.c1b27db432640b7f5305d2ff006c0535.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF" width="300px" height="350px" align="right" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://2.imimg.com/data2/OV/LS/MY-1816316/d_2097-01-250x250.jpg" width="250px" height="250px"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://www.itcportal.com/businesses/fmcg/foods/images/sunfeast-delishus-nut-biscotti-big.jpg" width="350px" height="350px"></td>

    </tr>
    <tr>
      <td><h2 style="text-align: center;">Unibic Cookies</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">McVite's Digestive Cookies</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Parle G Biscuits</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Delishus Cookies</h2></td>
    </tr>
    <tr>
      <td><img src="https://www.karachibakery.com/images/biscuits/kbbi-111-b.jpg" width="350px" height="350px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRffeNPvXuT2lHsE0uahxjAyrWKtDhqzm4k3eiEu7zbbaPUoLOu" width="300px" height="350px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://trickytime.in/wp-content/uploads/2016/12/amazon-order-1.png" width="250px" height="250px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZTgVlbgU1hzEXW6T305dXP1NHQgUurKSUJMD53OKuf71AL72A&reload=on" width="350px" height="350px" /></td>
    </tr>
    <tr>
      <td><h2 style="text-align: center;">Karachi Biscuits</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Hide and Seek Bourbon Cookies</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Good Day Cookies</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Hide and Seek Cookies</h2></td>
    </tr>
    <tr>
      <td><img src="https://www.wlivenews.com/wp-content/uploads/2015/11/Britannia-Industries-Ltd.jpg" width="350px" height="350px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://media-cdn.list.ly/production/248012/1552832/item1552832_600px.jpeg?ver=1781611903" width="300px" height="350px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://gharbaithebazar.com/wp-content/uploads/2016/05/Parle-Biscuits-20-20-Cashew-Butter-Cookies-200Gm.png" width="250px" height="250px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://britannia.co.in/images/products/tvc-marie.jpg" width="350px" height="350px" /></td>
    </tr>
    <tr>
      <td><h2 style="text-align: center;">Britannia Cookies</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Sunfeast Cookies</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">20-20 Cookies</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Marie Gold Biscuits</h2></td>
    </tr>
  </table>

</body>                  
</html>  