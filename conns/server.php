<?php
// initializing variables
$username = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'loginsystem');

// LOGIN USER
if (isset($_POST['oksbut'])) 
{
  $username = mysqli_real_escape_string($db, $_POST['uname']);
  $password = mysqli_real_escape_string($db, $_POST['upass']);

  if (empty($username)) 
  {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) 
  {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) 
  {
  	
  	$query2 = "SELECT * FROM user_manager WHERE user_email='$username' AND user_pwd='$password'";
  	$results2 = mysqli_query($db, $query2);

  	if (mysqli_num_rows($results2) == 1) 
	{

		session_start();
		$_SESSION['username2'] = $username;
		header('location: ../pages/Profile.php');

	}
	elseif(mysqli_num_rows($results2) == 0)
	{
    header("location: login.php?wup=Wrong Username / Password&user=".$username."");
	}
  }
}