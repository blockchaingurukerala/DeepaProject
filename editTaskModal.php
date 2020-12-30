
<!DOCTYPE html>
<html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="loginStyle.css">

  </head>

<!-- The Modal -->

<div id="id02" class="modal">
	<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>

	<!-- Modal Content -->
	<form class="modal-content animate" style="background-color:#FFDD00" onsubmit="editActivities()" action="editTaskModal.php" method="get">
		<div class="imgcontainer">
			  <h1> Edit Activity </h1>
		</div>

		<div class="container">

		 <label for="day">Day:</label>
		 <select id="day" name="day">
			 <option value="Monday">Monday</option>
			 <option value="Tuesday">Tuesday</option>
			 <option value="Wednesday">Wednesday</option>
			 <option value="Thursday">Thursday</option>
			 <option value="Friday">Friday</option>
			 <option value="Saturday">Saturday</option>
			 <option value="Sunday">Sunday</option>
		 </select><br /><br />


     	 <label for="task">Task:</label>
       <div class="select-editable">

     <!-- <select id="task" name="task"> -->
       <select id="task" onchange="this.nextElementSibling.value=this.value">
       <option value=""></option>
			 <option value="SpinWheel">SpinWheel</option>

     </select>
     <input type="text" name="task" placeholder="Select or Enter your own Task" value="" /><br /><br />
   </div>
   <br /><br />

		<label for="Time">Time:</label>
		<select id="Time" name="Time">
			<option value="8am">8 am</option>
			<option value="9am">9 am</option>
			<option value="10am">10 am</option>
			<option value="11am">11 am</option>
			<option value="12pm">12 pm</option>
			<option value="1pm">1 pm</option>
			<option value="2pm">2 pm</option>
			<option value="3pm">3 pm</option>
			<option value="4pm">4 pm</option>
			<option value="5pm">5 pm</option>
			<option value="6pm">6 pm</option>
			<option value="7pm">7 pm</option>
			<option value="8pm">8 pm</option>
			<option value="9pm">9 pm</option>
			<option value="10pm">10 pm</option>
		</select><br /><br />

	 <input type="submit" value="Submit">
	</form> </div>
		</div>



<?php

// Connect to server and select database.
{include 'connection.php';
  // echo " Connection Successful";
}

// Get values from form
if (isset($_REQUEST['day']))
{
$formday = $_REQUEST['day'];
$formtask = $_REQUEST['task'];
$formTime = $_REQUEST['Time'];
//
// echo "$formday";
// echo "$formtask";
// echo "$formTime";

// Insert data into mysql
// $sql="UPDATE FinalTT SET '$formday'='$formtask' WHERE Time='$formTime';";
// $result=query($sql);
$sql = "UPDATE FinalTT SET $formday='$formtask' WHERE Time='$formTime'";

if ($conn->query($sql) === TRUE) {

  echo 'Record updated successfully!  <a href="timeTableParent.php">Click here</a> to view the updated Table';

} else {
  echo 'Error updating record!  <a href="timeTableParent.php">Click here</a> to try again';

}


$conn->close();

//
// if successfully insert data into database, displays message "Successful".

}

// echo "<a href='insert.php'>Back to main page</a>";
// }}}

// else {
// echo "ERROR";
// // close connection
// mysql_close();
// }
?>
<script src="script.js"></script>
</body>
</html>
