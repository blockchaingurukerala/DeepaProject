<?php
session_start();
?>

<!DOCTYPE html>
<html>
<html lang="en">
<link rel="stylesheet" href="style.css">
      <?php
        $deepa0 = "index.php";
        $deepa1 = "usefulLinks.php";
        $deepa2 = "timeTable.php";
        $deepa3 = "wheel.php";
        $deepa4="instructions.php";
        $loggedin="";
        // Start the session
        
        if(isset($_SESSION['userName']))
        {   
          //echo '<script>alert("success")</script>';
           $loggedin="true";
          
        }
        else{
         // header("Location: index.php");
         //echo '<script>alert("Not logged in")</script>';
          $loggedin="false";
        }
        $visiblelogout="";
        $visiblelogin="";
        if($loggedin=="true"){
          $visiblelogout="visible"; 
          $visiblelogin="invisible";       
        }
        else{
          $visiblelogout="invisible"; 
          $visiblelogin="visible";  
        }
        
        ?>
<div class="" style="top:0;margin:0 auto;">
        <nav class="navbar navbar-expand-lg navbar-light " style="background:#FFDD00;">
          <a class="navbar-brand" href="#">MY PROJECT NAME</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo $deepa0 ?>" >Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $deepa2 ?>" >Time Table</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $deepa3 ?>" > We'll Decide</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $deepa1 ?>" > Useful Links</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $deepa4 ?>" > Instructions</a>
              </li>
            </ul>
            <ul class="navbar-nav ">
            
            <li class="nav-item"><button class="btn btn-primary <?php echo $visiblelogin ?>" onclick="document.getElementById('form1').style.display='block'">Register</button>
              <?php
              {include 'signup.php';}
              ?>
            </li>
            <li class="nav-item "><button class="btn btn-primary <?php echo $visiblelogin ?>" onclick="document.getElementById('id01').style.display='block'">Parent Login</button>
              <?php
              {include 'login.php';}
              ?>
            </li>
            <li class="nav-item"><button class="btn btn-danger <?php echo $visiblelogout ?>" onclick="logOut()">LogOut</button>
             
            </li>
            </ul>
            <!-- <span class="navbar-text">
              Navbar text with an inline element
            </span> -->
          </div>
        </nav>
</div>
<script>
        function logOut(){
          
          <?php session_unset(); ?>
            <?php session_destroy(); ?>
            location.href ="index.php";
      }
</script>
    
</html>