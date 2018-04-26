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
  <h1 style="text-align: center;">HOMEMADE FOOD</h1>
  <table>
    <tr>
      <td><img src="https://media.indiatimes.in/media/content/2015/Dec/channa_1451473430.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://media.indiatimes.in/media/content/2015/Dec/kurmura_1451473544.jpg" width="300px" height="300px" align="right" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://media.indiatimes.in/media/content/2015/Dec/nuts_1451473561.jpg" width="300px" height="300px"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://media.indiatimes.in/media/content/2015/Dec/til_1451473858.jpg" width="300px" height="300px"></td>

    </tr>
    <tr>
      <td><h2 style="text-align: center;">Channa</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Kurmura</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Nuts</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Tilgul</h2></td>
    </tr>
    <tr>
      <td><img src="https://media.indiatimes.in/media/content/2015/Dec/wheat_1451473988.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://media.indiatimes.in/media/content/2015/Dec/baked_1451473596.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://indianhealthyrecipes.com/wp-content/uploads/2016/06/homemade-granola-oats-recipes.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://2.bp.blogspot.com/-EAjitOJt_2Q/TNKcvEFAXwI/AAAAAAAACxc/HidV6fzS-Lo/s1600/murukku3.jpg" width="300px" height="300px" /></td>
    </tr>
    <tr>
      <td><h2 style="text-align: center;">Whole Wheat Biscuits</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Pooranpoli</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Granola Oats</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Murukku</h2></td>
    </tr>
    <tr>
      <td><img src="http://redchillycurry.com/wp-content/uploads/2013/11/thattai.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://www.manjulaskitchen.com/blog/wp-content/uploads/chakli_crispy_rice_snack.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://i.ytimg.com/vi/rkrSpCyrdqE/maxresdefault.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://i.pinimg.com/736x/e1/cc/f7/e1ccf7cc18b06e60e653c6c5de0dcb52--diwali-food-diwali-recipes.jpg" width="300px" height="300px" /></td>
    </tr>
    <tr>
      <td><h2 style="text-align: center;">Thattai</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Chakli</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Shakkar Para</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Nimki</h2></td>
    </tr>
    <tr>
      <td><img src="https://i.pinimg.com/736x/6d/61/fb/6d61fb824314b4aaafdd7590bc8b8271--baked-corn-tortillas-paleo-tortillas.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://www.easy-indian-cooking.com/wp-content/uploads/2013/06/diamond-maida-biscuits-500x262.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://dinetable.com/wp-content/uploads/2014/12/Sweet-Cheeda.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://s3-ap-southeast-1.amazonaws.com/betterbutterbucket/public/recipe_thumb/medium/1445340492BbN9UL2gow.jpg" width="300px" height="300px" /></td>
    </tr>
    <tr>
      <td><h2 style="text-align: center;">Baked Corn Tortilla Chips</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Spicy Maida Diamond Cut Biscuits</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Sweet cheeda</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Homemade Kaju Namkeen</h2></td>
    </tr>
  </table>

</body>                  
</html>  