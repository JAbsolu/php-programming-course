<!DOCTYPE html>
<html lang="en">
   <!-- Set variables to use in this page -->
   <?php 
      $myName        = "Johnson Absolu";
      $titleTagLine  = "YOUR TITLE TAGLINE HERE";
      $copyRightLine = "&copy; 2023 - Johnson Absolu, Bridgeport, CT 06604";
      ?>
   <head>
      <title><?php echo $titleTagLine; ?></title>
      <meta charset="utf-8">
      <!-- The next 3 lines are needed for Bootstrap 5 -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <script src="js/bootstrap.bundle.min.js"></script>
      <!-- This is YOUR custom css file -->
      <link href="css/project-style.css" rel="stylesheet">
   </head>
   <body>
      <div class="p-5 bg-primary text-white text-center">
         <div class="row">
            <div class="col-md-12 text-center">
               <h1>Your Final Project index.php page</h1>
               <h2><?php echo $myName ?></h2>
               <a href=".." class="btn btn-info" role="button">Home</a>
            </div>
         </div>
      </div>
      <div class="mt-5 p-4 bg-primary text-white text-center">
         <p><?php echo $copyRightLine ?></p>
      </div>
   </body>
</html>