<?php
session_start();
	if(isset($_POST['username'])&&isset($_POST['password'])){
	
		$user=strip_tags($_POST['username']);
		$password=strip_tags($_POST['password']);
		$connect=mysqli_connect("localhost","root") or die("Couldn't connect!");
		if($user=="")
		{
			unset($user);
			unset($password);
		}
		//echo $user;
		mysqli_select_db($connect,"pltDB") or die("Could not connect to the database!");
		$query=mysqli_query($connect,"SELECT * FROM account WHERE username='$user' AND password='$password'");
		$numrows= mysqli_num_rows($query);
		//echo $numrows;
			if ($numrows>0){
				$row=mysqli_fetch_assoc($query);
				$acctype=$row['accountType'];
				$_SESSION['accountType']=$row['accountType'];
				$numrows= mysqli_num_rows($query);
				$_SESSION['user']=$row['firstName'];
				
				if($acctype== "STUDENT"||$acctype== "FACULTY"||$acctype== "ADMIN"){
					header('Location:borrowerHome.php');
				}
				else if($acctype== "LIBRARIAN"){
					header('Location:librarianHome.php');
				}
				else if($acctype=="LIBRARYASSISTANT"){
					echo "eyyyyyyyy";
				}
			}else{
				$_SESSION['loginError']="INVALID USERNAME or PASSWORD";
				header('Location:LoginError.php');
				}
		echo $user. $password;
		
		}else{
			$_SESSION['loginError']="INVALID ACCESS, SESSION TERMINATED";
			header('Location:LoginError.php');
			//echo $_SESSION['loginError'];
			}
?>