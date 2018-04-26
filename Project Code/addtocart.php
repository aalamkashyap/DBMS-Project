<?php 
require 'connect.php';
$con = mysqli_connect("localhost","root","","hostel");
session_start();
$role = $_SESSION['sess_userrole'];
$ROLL = $_SESSION['sess_username'];

?>
<!DOCTYPE html>
<html>
<head>
<style>
body
{ 
  background: url(https://img.collegepravesh.com/2013/07/NIT-SURATHKAL-LOGO.png) no-repeat center fixed; 
  background-size: cover;
  background-size: 400px 400px;
}

h1
{
  color: blue;
  font-family: algerian;
  font-size: 300%;
 
}
h2
{
  color:blue;
  font-family: algerian;
  font-size: 200%;
 
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
  margin: 410px 630px;
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
    <th width=95%><h1 style="text-align: center;">Add To Cart</h1></th>
  </tr>
</table>                         
    <?php
    if(isset($_POST['submit']))
    { 



      $query = "INSERT INTO users_item(Roll_num,Item_num,Date,Time) VALUES (?,?,CURDATE(),CURTIME())";
        $stmt = mysqli_prepare($con,$query);
        $stmt->bind_param("ss", $_SESSION['sess_username'],$_POST['item']);
        $stmt->execute();
        header('Location: commerce1.php');
    }

    ?>      
<button class = "button2" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Add</button>
<div id="id01" class="modal">                          
 <form  method="POST" class="modal-content form-signin animate" role="form">                            
    <div class="container">
      <label><b>Item Number</b></label>
      <input type="text" placeholder="Enter Item Number" name="item" class="form-control" required>
   
      <button type="submit" class="button1" style="vertical-align:middle" name="submit"><span>Submit</span> </button>
      
    </div>
<div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> 
    </div>   
  </form>  
                   
</body>
</html>