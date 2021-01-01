<?php
session_start();
// echo '<script>alert("Login  Process")</script>';
//Get values from form to PHP

// Get values from form
if (isset($_POST["uname"]))
{
$formUsername=$_POST["uname"];
$formPassword=$_POST["psw"];
}


//server connnection
{include 'connection.php';}
if ($conn==true){
	echo "Connection Successful";
	// echo '<script>alert("Login  Connection Success")</script>';
} else{
	die("Connection failed: " . $conn->connect_error);
	// echo '<script>alert("Login  Connection failed")</script>';
}

// Query if email exists in db
$sql = "select username, password from TTLogin where username='$formUsername' and password='$formPassword'";

//echo $sql;
$result = mysqli_query($conn, $sql);
$rowCount = mysqli_num_rows($result);


if($row = mysqli_fetch_array($result)) {

	$qusername = $row['username'];
	$qpassword = $row['password'];
	
	//echo "Login sucessful";
	$_SESSION["userName"] = $qusername;
	
	// echo $_SESSION["userName"];
	// echo "good";
	// echo '<script>alert("Login Success")</script>';
	header("Location: index.php");
	
	} 
	else {
	
		echo '<script>alert("Login Failure")</script>';
		header("Location: index.php");
		
	}



?>
