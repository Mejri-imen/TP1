<?php
require 'config.php';
if(!empty($_SESSION["CIN"])){
  $CIN = $_SESSION["CIN"];
  $result = mysqli_query($conn, "SELECT * FROM etudiant WHERE CIN = $CIN");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <link rel="stylesheet" href="tp2 css.css"/>
  </head>
  <body>
    <h1>Welcome <?php echo $row["Nom"]; ?></h1>

    <button class="but1"><a href="logout.php">Logout</a></button>
  </body>
</html>