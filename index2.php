<?php
// Start the session

session_start();

?>
<!DOCTYPE html>

<html>


<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"> 
<title>Logged in Page</title>
<link rel="stylesheet" href="loginStyle.css">
<link rel="stylesheet" href="style.css">

</head>

<body>


  <!-- BEGIN: Sticky Header -->
  <div id="header_container">

      <div id="header">

      <a href="home.php" target="contentFrame"> <div class="logo" style="  width:90px; float:left; position:absolute; left:0; ">

        </div>
      </a>
        <?php
          $deepa0 = "home.php";
          $deepa1 = "usefulLinks.php";
          $deepa2 = "timeTableParent.php";
          $deepa3 = "wheel.php";
          $deepa4="instructions.php";
          ?>
          <a href="<?php echo $deepa0 ?>" target="contentFrame"> Home</a>

          <a href="<?php echo $deepa2 ?>" target="contentFrame"> Time Table</a>
          <a href="<?php echo $deepa3 ?>" target="contentFrame"> We'll Decide</a>
          <a href="<?php echo $deepa4 ?>" target="contentFrame"> Instructions</a>
          <a href="<?php echo $deepa1 ?>" target="contentFrame"> Useful Links</a>
          <button id="logoutBtn" onclick="logOut()">Parent Logout</button>
          <script src="script.js"></script>

      </div>
    </div>
  </div>
  <!-- END: Sticky Header -->



<!-- BEGIN: Page Content -->
<div id="container">

    <div id="content1">

    <iframe id="iframe" name="contentFrame"  scrolling="yes" frameborder="0" src="timeTableParent.php"></iframe>

    </div>

</div>


<!-- BEGIN: Sticky Footer -->

<?php include "footer.php" ?>
</body>

<!-- END: Sticky Footer -->

</body>

<script>
function logOut()
{

<?php session_destroy(); ?>

  window.open("index.php");
}
</script>

<!-- <script src="script.js"></script> -->

</html>
