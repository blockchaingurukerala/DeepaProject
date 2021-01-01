<!DOCTYPE html>
<html>
<head>
<title>TimeTableDisplay from database</title>
<!-- <link rel="stylesheet" href="TTStyle.css">
<link rel="stylesheet" href="loginStyle.css"> -->
<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

<body>

<div class="table-responsive mb-5">
		<table class="table table-hover mb-2">
			<thead>
					<tr>
						<th>Time</th>
						<th>Monday</th>
						<th>Tuesday</th>
						<th>Wednesday</th>
						<th>Thursday</th>
						<th>Friday</th>
						<th>Saturday</th>
						<th>Sunday</th>
					</tr>
			</thead>
			

			<tbody>
						<?php

						// Server connection
						{include 'connection.php';}

						function checkIfSpinWheel( $value ){

						$a = strtoupper('SpinWheel');
						if ( strpos( $a, strtoupper( $value ) ) !== false ) {
						return "<a href='wheel.php'>".$value."</a>";
						}else {
						return "<span>".$value."</span>";
						}
						}

						// Check connection
						if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
						}
						//Query DB
						$sql = "SELECT Time, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday FROM FinalTT";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {

						echo "<tr >
							<td>". $row["Time"]. "</td>
							<td>". checkIfSpinWheel($row["Monday"]) . "</td>
							<td>". checkIfSpinWheel($row["Tuesday"]). "</td>
							<td>". checkIfSpinWheel($row["Wednesday"]). "</td>
							<td>". checkIfSpinWheel($row["Thursday"]). "</td>
							<td>". checkIfSpinWheel($row["Friday"]). "</td>
							<td>". checkIfSpinWheel($row["Saturday"]). "</td>
							<td>". checkIfSpinWheel($row["Sunday"]). "</td>
						</tr>";
						}

						} else { echo "0 results"; }
						$conn->close();
						?>
			</tbody>
				
		</table>
		<br>
</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 


</body>

</html>
