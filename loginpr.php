<?php

$host="localhost";
$user="root";
$password="";
$db="user";
$db1="user-registration";

session_start();


$data=mysqli_connect($host,$user,$password,$db);
$data1=mysqli_connect($host,$user,$password,$db1);
if($data===false)
{
	die("connection error");
}

if($data1===false)
{
	die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];


	$sql="select * from loginpr where username='".$username."' AND password='".$password."' ";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

	if($row["usertype"]=="user")
	{
		$_SESSION["username"]=$username;
		$sql1="select * from covidconnect where username='".$username."' ";
		$result1=mysqli_query($data1,$sql1);
		$row1=mysqli_fetch_array($result1);
		if($row1){
      header("location:userhome.php");
		}else{
			header("location:covidconnect.html");
		}
	}

	elseif($row["usertype"]=="admin")
	{

		$_SESSION["username"]=$username;
		
		header("location:adminhome.php");
	}
	else
	{
		echo "Username or Password is incorrect";
	}

	

}


?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<center>
	<center><img src="logo.png"  width="300" height="150"></center>

	<h1>Login Form</h1>
	
	<style>
      body {
        background-image: url('covid.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        
      }
      </style>
	<br><br>
	<div style="background-color: skyblue; width: 500px;">
		<br><br>


		<form action="#" method="POST">

	<div>
		<label>Username</label>
		<input type="text" name="username" required>
	</div>
	<br><br>

	<div>
		<label>Password</label>
		<input type="password" name="password" required>
	</div>
	<br><br>

	<div>
		
		<input type="submit" value="Login">
	</div>


	</form>


	<br><br>
 </div>
</center>

</body>
</html>
















