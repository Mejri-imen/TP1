<?php
require 'config.php';
if(!empty($_SESSION["CIN"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $Nom = $_POST["Nom"];
  $Mot_de_passe = $_POST["Mot_de_passe"];
  $result = mysqli_query($conn, "SELECT * FROM etudiant WHERE Nom = '$Nom' OR Email = '$Nom'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($Mot_de_passe == $row['Mot_de_passe']){
      $_SESSION["login"] = true;
      $_SESSION["CIN"] = $row["CIN"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="tp2 css.css"/>
  </head>
  <body>
  <div class="saisir">
    <h2>Login</h2>
    <form class="" action="" method="post" autocomplete="off">
      <label for="Nom">Username or Email : </label>
      <input type="text" name="Nom" id = "Nom" required value=""> <br>
      <label for="Mot_de_passe">Mot_de_passe : </label>
      <input type="password" name="Mot_de_passe" id = "Mot_de_passe" required value=""> <br>

      <button type="submit" class="but" name="submit">Login</button>

      <button type="submit"class="but" ><a href="table.php">Go to the Liste</a></button>

      <a href="exercice1.php" >Sign up</a>
     
</div>
    </form>
    <br>
    
  </body>
</html>