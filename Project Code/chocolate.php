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
  .button2 
{
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  
  border: none;
  cursor: pointer;
  width: 100%;
  font-size: 25px;
}

.button2:hover 
{
  opacity: 0.8;
}

.button1 
{
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

.button1:hover 
{
  opacity: 0.8;
}

.cancelbtn 
{
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 16px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.cancelbtn span 
{
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.cancelbtn span:after 
{
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.cancelbtn:hover span 
{
  padding-right: 25px;
}

.cancelbtn:hover span:after 
{
  opacity: 1;
  right: 0;
}


</style>
</head>
<body>
  <h1 style="text-align: center;">CHOCOLATES</h1>
  <table>
    <tr>
      <td><img src="https://www.smashinglists.com/wp-content/uploads/2011/10/ferrerorocher2.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://images-na.ssl-images-amazon.com/images/I/71Cw45%2BD%2BHL._SL1280_.jpg" width="300px" height="300px" align="right" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://www.smashinglists.com/wp-content/uploads/2011/10/Galaxy-Dark-Chocolate.jpg" width="300px" height="300px"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://www.smashinglists.com/wp-content/uploads/2011/10/Mars-Chocolate.jpg" width="300px" height="300px"></td>

    </tr>
    <tr>
      <td><h2 style="text-align: center;">Ferrero Rocher</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Dairy Milk</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Galaxy</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Mars</h2></td>
    </tr>
    <tr>
      <td><img src="http://listz.in/wp-content/uploads/2014/10/alpino-2.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://listz.in/wp-content/uploads/2014/10/bournville-2.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://www.smashinglists.com/wp-content/uploads/2011/10/kit-kat-orange-and-chocolate.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://i.ytimg.com/vi/dmeVxIXTuAs/maxresdefault.jpg" width="300px" height="300px" /></td>
    </tr>
    <tr>
      <td><h2 style="text-align: center;">Alpino</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Bournville</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Kit-Kat</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Green Black's</h2></td>
    </tr>
    <tr>
      <td><img src="https://www.smashinglists.com/wp-content/uploads/2011/10/guylian.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://www.smashinglists.com/wp-content/uploads/2011/10/patchi.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5T1rzIxI6xqMwuum0VnPnZhefvFAyNseG7kLr-9AuEThal1pL9g" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://listz.in/wp-content/uploads/2014/10/temptation-2.jpg" width="300px" height="300px" /></td>
    </tr>
    <tr>
      <td><h2 style="text-align: center;">Guylian</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Patchi</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Hershey's Chocolate</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Temptation</h2></td>
    </tr>
    <tr>
      <td><img src="http://www.trendingtopmost.com/wp-content/uploads/2016/12/MILKY-BAR-Top-10-Chocolate-Brands-in-India.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="http://www.trendingtopmost.com/wp-content/uploads/2016/12/5-STAR-Top-10-Chocolate-Brands-in-India-2017.jpg" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://qph.ec.quoracdn.net/main-qimg-72213b21b810260f3d7a03eeb85678be-c" width="300px" height="300px" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="https://5.imimg.com/data5/JW/VI/MY-48809272/snickers-50g-chocolate-bar-500x500.jpg" width="300px" height="300px" /></td>
    </tr>
    <tr>
      <td><h2 style="text-align: center;">Milky Bar</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">5-Star</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Bar-One</h2></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2 style="text-align: center;">Snickers</h2></td>
    </tr>
  </table>

</body>                  
</html>  