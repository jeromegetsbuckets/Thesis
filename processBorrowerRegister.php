<meta charset=utf-8>
<?php
	session_start();
	$firstname= strip_tags(strtoupper($_POST['firstname']));
	$lastname= 	strip_tags(strtoupper($_POST['lastname']));
	$username= 	strip_tags($_POST['username']);
	$pass= 		strip_tags($_POST['password']);
	$course= 	strip_tags(strtoupper($_POST['course']));
	$yearlvl=	strip_tags($_POST['yrlevel']);
	
	//$connect=mysqli_connect("localhost","root") or die("Couldn't connect!");
	//mysqli_select_db($connect,"pltDB") or die("Could not connect to the database!");
		
		//$query=mysqli_query($connect,"SELECT * FROM account WHERE username='$username'");
		//$numrows= mysqli_num_rows($query);
		//$row=mysqli_fetch_assoc($query);
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
			 VALUES ('$username','$pass','STUDENT','ENABLE','$firstname','$lastname')";
			 if ($conn->query($sql) === TRUE) {
					echo "New record created successfully";
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			 $sql="SELECT * FROM account WHERE username='$username'";
			 $result=$conn->query($sql);
			 if ($result === TRUE) {
					echo "New record created successfully";
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			 $row=$result->fetch_assoc();
			 $accountNo=$row['accountNo'];
			 $sql="INSERT INTO student VALUES ('$acctNo','$course','$yearlvl')";
			 if ($conn->query($sql) === TRUE) {
					echo "New record created successfully";
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			 
			 $_SESSION['message']="Registration Successful!</br>";
			}
		 else{
			 $_SESSION['message']="STUDENT ID already exists!</br>";
			 echo "2";
		 }
		 echo $username;
		 echo $_SESSION['message'];
		 header('Location:studentRegistration.php');
		
		
?>