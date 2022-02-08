<?php
session_start();


if(!isset($_SESSION["username"]))
{
	header("location:loginpr.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<style>
      body {
        background-image: url('covid.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        
      }
      </style>
	  <center><img src="logo.png"  width="300" height="150"></center>
    <h2>Welcome,<?php echo $_SESSION["username"] ?> Here are your survey details filled</h2>

      


    <?php 
	$host="localhost";
	$user="root";
	$password="";
	$db="user-registration";

	$data=mysqli_connect($host,$user,$password,$db);

	$query="SELECT * from covidconnect where username='$user'";
  
	$result=mysqli_query($data,$query);

 

  

	?>
	<table border="2 px">
		<tr>
			<th>Name</th>
			<th>Current Location</th>
			<th>Preferred Location</th>
			<th>Both Doses</th>
			<th>Safety</th>
			<th>Arogya Setu App</th>
			<th>Risk Factor</th>
			<th>Symptoms</th>
			<th>Covid Infected till today</th>
			<th>Trasportation in Last 7 Days</th>
			<th>Family Member Infected</th>
			


		</tr>

</center>
	



	<?php 


	while($info=$result->fetch_assoc())
	{
		?>
		<tr>


		<?php
		echo"<td>{$info['username']}</td>";
		echo"<td>{$info['Current_location']}</td>";
		echo"<td>{$info['Prefer_location']}</td>";
		echo"<td>{$info['Both_dose']}</td>";
		echo"<td>{$info['Safety']}</td>";
		echo"<td>{$info['Arogya_setu']}</td>";
		echo"<td>{$info['Risk_factor']}</td>";
		echo"<td>{$info['Symptoms']}</td>";
		echo"<td>{$info['Covid_infected']}</td>";
		echo"<td>{$info['transport']}</td>";
		echo"<td>{$info['Family_infected']}</td>";





		
		?>
	</tr>

	<?php
	}
	


?>

</table>

<center><h1><a href="logoutpr.php">Logout</a></h1></center>


</body>
</html>



</body>
</html>
