<?php
require 'connect.php';
$con = mysqli_connect("localhost","root","","hostel");
session_start(); 
$ROLL = $_SESSION['sess_username'];

if(count($_POST)>0) 
{
	$result = mysqli_query($con,"SELECT * from login WHERE username='" . $_SESSION["sess_username"] . "'");
	$row=mysqli_fetch_array($result,MYSQLI_BOTH);
	
	if($_POST["currentPassword"] == $row["password"]) 
	{
		mysqli_query($con,"UPDATE login set password='" . $_POST["newPassword"] . "' WHERE username='" . $_SESSION["sess_username"] . "'");
		$message = "Password Changed";
		header('Location: index.php');
	} 
	else 
	{
		$message = "Current Password is not correct";
	}
}
?>

<html>
<head>
<style>


input[type=text], input[type=password] 
{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

input[type=int], input[type=password] 
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
	h1
	{
  		color: green;
  		font-family: algerian;
  		font-size: 300%;
  		
	}
	h2
	{
  		color: green;
  		font-family: algerian;
  		font-size: 200%;
  		
	}

	input 
	{
    	width: 100%;
	    padding: 12px;
	    border: 1px solid #ccc;
	    border-radius: 4px;
	    box-sizing: border-box;
	    margin-top: 6px;
	    margin-bottom: 16px;
	}

/* Style the submit button */
	input[type=submit] 
	{
    	background-color: #4CAF50;
    	color: white;
	}
body
{ 
  background: url(https://techservices.illinois.edu/sites/techservices.illinois.edu/files/password_580-100022344-large.jpg) no-repeat center fixed; 
  background-size: cover;
  background-size: 1400px 800px;
}
/* Style the container for inputs */
	.container 
	{
    	background-color: #f1f1f1;
    	padding: 20px;
	}

/* The message box is shown when the user clicks on the password field */
	#message 
	{
	    display:none;
	    background: #f1f1f1;
	    color: #000;
	    position: relative;
	    padding: 20px;
	    margin-top: 10px;
	}

	#message p 
	{
    	padding: 10px 35px;
    	font-size: 18px;
	}

/* Add a green text color and a checkmark when the requirements are right */
	.valid 
	{
    	color: green;
	}

	.valid:before 
	{
    	position: relative;
    	left: -35px;
    	content: "✔";
	}

/* Add a red text color and an "x" when the requirements are wrong */
	.invalid 
	{
    	color: red;
	}

	.invalid:before 
	{
	    position: relative;
	    left: -35px;
	    content: "✖";
	}
</style>

<script>
	function validatePassword() 
	{
		var currentPassword,newPassword,confirmPassword,output = true;
		currentPassword = document.frmChange.currentPassword;
		newPassword = document.frmChange.newPassword;
		confirmPassword = document.frmChange.confirmPassword;

		if(!currentPassword.value) 
		{
			currentPassword.focus();
			document.getElementById("currentPassword").innerHTML = "required";
			output = false;
		}
		else if(!newPassword.value) 
		{
			newPassword.focus();
			document.getElementById("newPassword").innerHTML = "required";
			output = false;
		}
		else if(!confirmPassword.value) 
		{
			confirmPassword.focus();
			document.getElementById("confirmPassword").innerHTML = "required";
			output = false;
		}

		if(newPassword.value != confirmPassword.value) 
		{
			newPassword.value="";
			confirmPassword.value="";
			newPassword.focus();
			document.getElementById("confirmPassword").innerHTML = "not same";
			output = false;
		} 	
		return output;
	}
</script>
</head>

<body>
<h1 style="text-align: center;">National Institute of Technology Karnataka, Surathkal</h1>
 
<h2 style="text-align: center;">Change Password Portal</h2>
  <button class = "button2" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Change Password
  </button>                                                     
  
  <div id="id01" class="modal">        
                              
    
     <form name="frmChange" method="post" role="form" class="modal-content form-signin animate" onSubmit="return validatePassword()">
     	<div class="container">
	
			<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
			<label style="font-family: arial; font-size: 20px">Current Password</label>
			<input type="password" name="currentPassword" class="form-control"/><span id="currentPassword"  class="required"></span>

			<label style="font-family: arial; font-size: 20px">New Password</label>
			<input type="password" name="newPassword" class="form-control"/><span id="newPassword" class="required"></span>

			<label style="font-family: arial; font-size: 20px">Confirm Password</label>
			<input type="password" name="confirmPassword" class="form-control"/><span id="confirmPassword" class="required"></span>

<button type="submit" class="button1" style="vertical-align:middle" name="submit"><span>Submit</span></button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> 
    </div>   
  </form>  
		



		
</body>
</html>