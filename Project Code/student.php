<?php 
require 'connect.php';
$con = mysqli_connect("localhost","root","","hostel");
session_start();
$role = $_SESSION['sess_userrole'];
$ROLL = $_SESSION['sess_username'];
if(!isset($_SESSION['sess_username']) || $role!="s")
{
  header('Location: index.php?err=2');
}
   
$result = mysqli_query($con,"select * from login where username='$ROLL'") or die(mysqli_error($con));
if (mysqli_num_rows($result) == 0) {
    echo "No data found";
    exit;
}


?>

<html>
<head>
<style >
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
    background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfWgvgJ_x7YxF3751XHJqY9B5FiaXhoqM4ucnOwd5C2kg20Ssg) no-repeat center fixed; 
    background-size: cover;
    background-size: 250px 400px;
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
  <h1 style="text-align: center;">Welcome To Student Portal</h1> 
  <div class="dropdown"  style="float:left;">
    <button onclick="myFunction()" class="dropbtn">Choose your Option</button>
    <div id="myDropdown" class="dropdown-content">
      <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
      <a href="info.php">Information and Complaint Form</a>
      <a href="room.php">Room Allotment</a>
      <a href="commerce.php">E-Commerce</a>
      <a href="review.php">Eating Places in NITK</a>
      <a href="wardeninfo.php">Warden of Block</a>
      <a href="change_password1.php">Change Password</a>
    </div>
  </div>


  <div class="dropdown" style="float:right;">
    <button class="dropbtn">Logout</button>
    <div class="dropdown-content">
      <a href="logout.php">Logout</a>
    </div>
  </div>


  <script>/* When the user clicks on the button,toggle between hiding and showing the dropdown content */
  function myFunction() 
  {
    document.getElementById("myDropdown").classList.toggle("show");
  }

  function filterFunction() 
  {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) 
    {
      if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) 
      {
            a[i].style.display = "";
      } 
      else 
      {
            a[i].style.display = "none";
      }
    }
  }
</script>
</body>
</html>




