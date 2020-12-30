<!DOCTYPE html>
<html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


	<!-- <link rel="stylesheet" href="loginStyle.css">-->
  </head>

<body>
  <!-- The Modal -->
  <div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

    <!-- Modal Content -->
    <form class="modal-content animate" style="background-color:#FFDD00" onsubmit="loginJS()" action="login_process.php" method="POST">
      <div class="imgcontainer">
        <h1> Login </h1>
      </div>

      <div class="container">
        <table class="table">
          <tr>
            <td>
            <label for="uname"><b>Username</b></label>
            </td>
            <td>
            <input type="text" placeholder="Enter Username" name="uname" class="form-control" required>
            </td>
          </tr>
          <tr>
            <td>
            <label for="psw"><b>Password</b></label>
            </td>
            <td>
            <input type="password" placeholder="Enter Password" name="psw" class="form-control" required>
            </td>
          </tr>
          <tr>
            <td>
            <button id="loginButton" type="submit" onclick="submitLogin()" class="btn btn-primary">Login</button>
            </td>
            <td>
            <button id="cancelButton" type="button" class="btn btn-primary" onclick="document.getElementById('id01').style.display='none'" >Cancel</button>
            </td>
          </tr>
        </table>
        
        
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me</label>

          <div class="container">
           
            <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
          </div>


      </div>
    </form>
  </div>
  <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
</body>

</html>
