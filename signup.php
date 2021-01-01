<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"> 
  <title>Login</title>

  </head>

<body>


	<!-- The Modal -->
	<div id="form1" class="modal">

    <!-- <span onclick="document.getElementById('id0r').style.display='none'" class="close" title="Close Modal">&times;</span> -->
    <span onclick="document.getElementById('form1').style.display='none'" class="close" title="Close Modal">&times;</span>

    <!-- Modal Content -->
      <form class="modal-content animate" style="background-color:#FFDD00" onsubmit="registerJS()" action="signup_process.php" method="POST">


      <div class="imgcontainer">
        <h1>Register</h1>
      </div>

	    <div class="container">
				<table class="table">
					<tr>
						<td>
							<label for="fname"><b>First Name</b></label>
						</td>
						<td>
							<input class="form-control" type="text" placeholder="Enter First Name" name="fname" required>
						</td>
					</tr>
					<tr>
						<td>
							<label for="lname"><b>Lastname</b></label>
						</td>
						<td>
							<input class="form-control" type="text" placeholder="Enter Last Name" name="lname" required>
						</td>
					</tr>
					<tr>
						<td>
							<label for="uname"><b>Username</b></label>
						</td>
						<td>
							<input class="form-control" type="email" placeholder="Enter Email Address" name="uname" required>	
						</td>
					</tr>
					<tr>
						<td>
							<label for="psw"><b>Password</b></label>
						</td>
						<td>
							<input class="form-control" type="password" placeholder="Enter Password" name="psw" id="pID1" required>	
						</td>
					</tr>
					<tr>
						<td>
							<label for="cpsw"><b>Confirm Password</b></label>
						</td>
						<td>
							<input class="form-control" type="password" placeholder="Re-enter Password" name="cpsw" id="pID2" required>	
						</td>
					</tr>
					<tr>
						<td>
							<button class="btn btn-primary" type="submit" onclick="validateData()">Create Account</button>
						</td>
						<td>
						<button id="cancelButton" class="btn btn-primary" type="button" onclick="document.getElementById('form1').style.display='none'" >Cancel</button>
						</td>
					</tr>
				</table>
    </div>
<div>
	    </div>
	  </form>
</div>
	<script src="script.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
</body>



</html>
