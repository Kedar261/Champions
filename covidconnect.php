<?php
	$username = $_POST['username'];
	$Current_location = $_POST['Current_location'];
	$Prefer_location = $_POST['Prefer_location'];
	$Both_dose = $_POST['Both_dose'];
	$Safety = $_POST['Safety'];
	$Arogya_setu = $_POST['Arogya_setu'];
	$Risk_factor = $_POST['Risk_factor'];
	$Symptoms = $_POST['Symptoms'];
	$Covid_infected = $_POST['Covid_infected'];
	$transport = $_POST['transport'];
	$Family_infected = $_POST['Family_infected'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','user-registration');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into covidconnect(username,Current_location, Prefer_location, Both_dose, Safety, Arogya_setu, Risk_factor,Symptoms,Covid_infected,transport,Family_infected) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssssssss", $username,$Current_location, $Prefer_location, $Both_dose, $Safety, $Arogya_setu, $Risk_factor,$Symptoms, $Covid_infected,$transport,$Family_infected);
		$execval = $stmt->execute();
		echo $execval;
		echo "Survey completed successfully";
		
		
		
		
		
		
		$stmt->close();
		$conn->close();
		
		
	}
	  
  
    
      
 
?>




<!doctype html>  
<html>  
<head>  
<title>Welcome</title>  
    <style>   
        body{  
              
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color: azure ;  
    color: palevioletred;  
    font-family: verdana;  
    font-size: 100%  
      
        }  
            h2 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}  
        h1 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}  
              
          
    </style>  
</head>  
<body>  
    
      
<h2> <a href="loginpr.php">Click here to Logout</a></h2>  
 
</body>  
</html>  


