<?php
    //  echo '<script>alert("Register   Process")</script>';
	// Connect to server and select database.
	{include 'connection.php';

	}

	// Get values from form
	if (isset($_REQUEST['fname']))
	{
	$ffname = $_REQUEST['fname'];
	$flname = $_REQUEST['lname'];
	$funame = $_REQUEST['uname'];
	$fpsw = $_REQUEST['psw'];
	$fcpsw = $_REQUEST['cpsw'];


		if ($_POST['psw' != 'cpsw'])
	 {
		echo
		 ("Oops! Password did not match! Try again. ");
		 $conn->close();
		 header('Location:signup.php');

	 }

	$sql = "INSERT INTO TTLogin
(firstName, lastName, userName, password)
VALUES('$ffname', '$flname', '$funame', '$fpsw ');";

	if ($conn->query($sql) === TRUE) {

		echo '<script>
		
		alert("Welcome to the Organised kid. Please login to edit Timetable activities");
		window.location.href="index.php";
		</script>';



	} else {
	  echo "Error updating record: " . $conn->error;
	  echo '<script>alert("Error in writing table")</script>';
	}

	$conn->close();
}
?>
