<html>
    <link rel="stylesheet" href="TTStyle.css">
    <link rel="stylesheet" href="loginStyle.css">
    <body>
      <!-- BEGIN: Sticky Header -->
      <?php include "header.php" ?>
      <!-- END: Sticky Header -->
      <div class="button-wrapper">
          <button class="print-button" onclick="window.print()">Print this page</button>
      </div>
        <?php
        {include 'display.php';}
        ?>
        <?php include "footer.php" ?>
        <script src="script.js"></script>
    </body>
</html>
