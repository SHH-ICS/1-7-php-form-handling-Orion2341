<!DOCTYPE html>
<html>
  <head>
      <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
      <link rel="manifest" href="favicons/site.webmanifest">
      <meta name="msapplication-TileColor" content="#da532c">
      <meta name="theme-color" content="#ffffff">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
      <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
      <title>Welcome Page</title>
  </head>

  <body>
    
    <?php
    $userName = "";
    if ( isset( $_POST['userName'] ) ){
      $userName = $_POST['userName'];
    }
    echo "<h1>Welcome ".$userName."!</h1>\n";
    ?>
    
  </body>
  
</html>
