
<?php
//  if(isset($_SESSION['userName']))
//  {   
//   //  header("Location: index2.php");
//   //  $loggedin="true";
//   // echo '<script>alert("succes in index page")</script>';
//    session_start();
//  }
//  else{
//   // header("Location: index.php");
//    //$loggedin="false";
//   //  echo '<script>alert("failure in index page")</script>';
//  }
?>
<!DOCTYPE html>

<html>

<head>

<title>The Organised Kid</title>
<link rel="stylesheet" href="loginStyle.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>

<!-- BEGIN: Sticky Header -->
<?php include "header.php" ?>
<!-- END: Sticky Header -->

<!-- BEGIN: Page Content -->
<div class="container">

    <div id="">
                  <div class="row">
                    <div class="col col-12 col-md-6 ">                    
                        <div>
                              <p>
                                <h2>Are you an organised kid yet?</h2>
                                <br>
                                <p>You have landed on the right place to learn how to be one!
                            The Organised kid website is designed to help you organise your tasks and responsibilities in an efficient way. This will ensure that you do not waste your
                            valuable time that could otherwise be spent maximising each learning opportunity.</p>
                            <br>
                            <br>
                            <h2>How to be one?</h2>
                            <br>
                            <p>By simply following these steps below.</p>
                            <br>
                            <p><span style="color:#FF006D;">Be Organised</span> means you get where you need to be and gather the supplies needed to complete the task.
                            <br><br>
                            <span style="color:#FF006D;">Staying Focused</span> means sticking with the task until it is done and learning to say "no" to distractions.
                            <br><br>
                            <span style="color:#FF006D;">Getting it done</span> means finishing up, checking your work, and putting on the finishing touches, like remembering to put a homework paper in the right folder and putting the folder inside the backpack so it's ready for the next day.</p>
                            <br>
                            <br>
                            <h2>So why wait?</h2>
                            <br>
                            <p>Let's put it to practice! Follow the <a class="blinking" href ="./instructions.php">Instructions</a> to use the website <br>
                            Happy Organising and Good Luck with your <span style="color:#FFDD00;">The Organised Kid</span> journey!</p>
                            </p>
                            <br>
                            
                        </div>
                            
                    </div>
                    <div class="col col-12 col-md-6 ">	
                        <div>
                            <img class="img-fluid" src="images\1.jpg" alt="mobile">	
                        </div>				
                                    
                    </div>

                  </div>
                  

    </div>

</div>

<!-- END: Page Content -->


<?php include "footer.php" ?>
</body>
<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 


</html>
