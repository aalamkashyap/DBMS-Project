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
  <h1 style="text-align: center;">NAMKEEN PRODUCTS</h1>
  <table>
    <tr>
      <td><img src="https://images-na.ssl-images-amazon.com/images/I/91Y6sJ31YDL._SL1500_.jpg" width="400px" height="350px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://i.pinimg.com/736x/4d/e7/15/4de715ec51e490c1da4d13bae4ffffe7--family-gatherings-food-news.jpg" width="450px" height="350px" align="right" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://3.bp.blogspot.com/-UXZyNJG2mNU/Ttd6jIVVs2I/AAAAAAAAADg/88LtA4qyJDA/s400/lehar_online.jpg" width="350px" height="350px" align="right"></td>
      

    </tr>
    <tr>
      <td><h2 style="text-align: center;">Haldiram</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Bikano</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Lehar</h2></td>
      
    </tr>
    <tr>
      <td><img src="https://images-na.ssl-images-amazon.com/images/I/61b4V47x2nL._SX466_.jpg" width="400px" height="350px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://i.ytimg.com/vi/nKTACnN0IcA/maxresdefault.jpg" width="500px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKUjUSHY8s_Lzx48nR4_yT8uKpmsza4e6UMOOqrBa_d_NNkT8gNg" width="350px" height="300px" /></td>
      
    </tr>
    <tr>
      <td><h2 style="text-align: center;">Kurkure</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Bhakarwadi</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Coated Peanuts</h2></td>
     
    </tr>
    <tr>
      <td><img src="http://yourtaste.in/wp-content/uploads/2015/02/Double-Laung-SEV.jpg" width="350px" height="350px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://ksmartstatic.sify.com/cmf-1.0.0/appflow/bawarchi.com/Image/oettbehhjifgj_bigger.jpg" width="500px" height="350px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://food.fnr.sndimg.com/content/dam/images/food/fullset/2010/4/26/2/FNM_060110-Weekend-Dinners-039_s4x3.jpg.rend.hgtvcom.616.462.suffix/1382539252030.jpeg" width="350px" height="350px" /></td>
      
    </tr>
    <tr>
      <td><h2 style="text-align: center;">Laung Sev</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Garlic Sev</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Spicy Potato Chips</h2></td>
      
    </tr>
  </table>

</body>                  
</html>  