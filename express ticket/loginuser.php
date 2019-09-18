<?php
session_start();
	
	//Include database connection details
	include("conection.php");
	//Sanitize the POST values
	$username = $_POST['username'];
	$password = $_POST['password'];
	if(!empty($username) && !empty($password))
	{
	//Create query
	$qry="SELECT * FROM users_auth as ua,users_info as ui WHERE ua.ui_id=ui.ui_id AND ua.username='$username' AND ua.password='$password'";
	$result=mysql_query($qry);
	
	//Check whether the query was successful or not
	
	if($result) {
	
	if(mysql_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$user = mysql_fetch_assoc($result);
			$_SESSION['id'] = $user['id'];
			$_SESSION['name'] = $user['username'];
			$_SESSION['CATEGORY']=$user['category'];
			session_write_close();
			if($_SESSION['CATEGORY']=='Boss')
			{
			header("Location:test/home.php");
			}
			else if($_SESSION['CATEGORY']=='worker')
			{
			header("Location:test/home.php");
			}
			exit();
			
		}
		
		else {
			//Login failed
			header("location:index.php?attempt=fail");
			exit();
		}
		
	}else {
		die("Query failed");
	}
	}
	else{
	header("location:index.php?attempt=null");
	}
?>

