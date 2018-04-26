<?php
require 'connect.php';
$con = mysqli_connect("localhost","root","","hostel");
session_start(); 
$variable = $_POST['topology'];

$sql="SELECT * FROM ecommerce WHERE Item_name='$variable'";

$result=mysqli_query($con,$sql) or die($sql."<br/><br/>".mysqli_error($con));

?>
<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

h1
{
  color: blue;
  font-family: algerian;
  font-size: 300%;
}

h2
{
  color: blue;
  font-family: algerian;
  
}

input[type=text], input[type=password] 
{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.button2 
{
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0px;
  border: none;
  cursor: pointer;
  width: 100%;
  font-size: 20px;
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
  font-size: 20px;
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

.imgcontainer 
{
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar 
{
  width: 40%;
  border-radius: 50%;
}

.container 
{
  padding: 16px;
}

span.psw 
{
  float: right;
  padding-top: 16px;
}

.modal 
{
  display: none; 
  position: fixed;
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4); 
  padding-top: 60px;
}

.modal-content 
{
  background-color: #fefefe;
  margin: 5% auto 15% auto; 
  border: 1px solid #888;
  width: 100%; 
}

.close 
{
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus 
{
  color: red;
  cursor: pointer;
}

a:link, a:visited {
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color: red;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: green;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111111;
}

.animate 
{
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom 
{
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom 
{
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

@media screen and (max-width: 300px) 
{
  span.psw 
  {
    display: block;
    float: none;
  }
  .cancelbtn 
  {
    width: 100%;
  }
}

</style>
</head>
<body>
<table style="height: 150;width: 100%">
    <tr>
      <th width=95%><h1 style="text-align: center;">National Institute of Technology Karnataka, Surathkal</h1></th>
    </tr>
    <tr>
      <th width=95%><h2 style="text-align: center;">Product Availability</h2></th>
    </tr>
  </table>   

<div style="overflow-x:auto;">
<table width="450" height="100" border="1px solid black" style="margin-right: 0;margin-left: 0;border-collapse: collapse;">
    
    <tr>
      <td width="130"><strong>Item Number</strong></td>
      <td width="130"><strong>Item Name</strong></td>
      <td width="130"><strong>Description</strong></td>
      <td width="130"><strong>Price</strong></td>
      <td width="130"><strong>Type</strong></td>
    </tr>
    <?php
    while($rowc=mysqli_fetch_array($result))
    {
  ?><tr>
      <td>&nbsp;<?php echo $rowc["Item_number"];?></td>
      <td>&nbsp;<?php echo $rowc["Item_name"];?></td>
      <td>&nbsp;<?php echo $rowc["Description"];?></td>
      <td>&nbsp;<?php echo $rowc["Price"];?></td>
      <td>&nbsp;<?php echo $rowc["Type"];?></td>
      </tr>
      </table>
      <?php
    }
      ?>
 

  </table>

<button class="button1" style="vertical-align:middle"">
    <a href="cart.php">Check Cart</a>
  </button>
  <button class="button1" style="vertical-align:middle"">
    <a href="addtocart.php">Add To Cart</a>
  </button>
</div>
 
</body>
</html>


