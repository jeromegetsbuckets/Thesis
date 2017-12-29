<?php
session_start();
$username= strip_tags($_POST['username']);
$password= strip_tags($_POST['password']);
$firstname= strip_tags(strtoupper($_POST['firstname']));
$lastname= strip_tags(strtoupper($_POST['lastname']));

$conn = new mysqli("localhost", "root", "", "pltDB");
			// Check connection
		if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
		}
		$sql="SELECT * FROM account WHERE username='$username'";
		$result=$conn->query($sql);
		$numrows=$result->num_rows;
		
		if ($numrows==0){
			
			 $sql = "INSERT INTO account(username, password, accountType, status, firstName, lastName)
			 VALUES ('$username','$password','LIBRARIAN','ENABLE','$firstname','$lastname')";
			 if ($conn->query($sql) === TRUE) {
					echo "New record created successfully";
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			 
			 $_SESSION['message']="Registration Successful!</br>";
			}
		 else{
			 $_SESSION['message']="Username already exists!</br>";
		}
		//echo $username. $password. $firstName. $lastName;
		header('Location:librarianRegistration.php');
?>