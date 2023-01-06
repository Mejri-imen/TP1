<?php
include 'insert.php';
if(isset($_POST['submit'])){
    $CIN = $_POST['CIN'];
    $Nom = $_POST['Nom'];
    $Prénom = $_POST['Prénom'];
    $dn = $_POST['Date_de_naissance'];
    $Email = $_POST['Email'];
    $motpass = $_POST['Mot_de_passe'];
    $image_url = $_POST['image_url'];

    $stmt ="INSERT INTO etudiant(CIN, Nom, Prénom, Date_de_naissance, Email, Mot_de_passe, image_url) values('$CIN','$Nom','$Prénom','$dn','$Email','$motpass','$image_url')";
    $result=Mysqli_query($conn,$stmt);
    if($result){
        header('location:table.php');
    }else{
        echo"non valider";
    }
}

?>


<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="tp2 css.css"/>
    </head>
    
    <body>
        <div class="saisir">
        <form  method="POST">
          <h1>Saisir un etudiant</h1>
        <br>
        <h4>CIN:</h4> <input type="text" class="saisirIN" name="CIN" placeholder="Enter votre CIN"><br><br>

        <h4>Nom:</h4> <input type="text" class="saisirIN" name="Nom" placeholder="Enter votre nom"><br><br>

        <h4>Prenom:</h4><input type="text" class="saisirIN" name="Prénom" placeholder="Enter votre prenom"><br><br>

        <h4>Date de naissance:</h4> <input type="date" class="saisirIN" name="Date_de_naissance" id="" placeholder="Enter votre Date de naissance"><br><br>
                
        <h4>Email:</h4><input type="email" class="saisirIN" name="Email" placeholder="Enter Email Address" onkeydown="validation()"><br><br>

        <h4>Mot de passe:</h4><input type="password" class="saisirIN" name="Mot de passe" placeholder="Mot de passe" ><br><br>

        <label for="image_url">Image : </label>
      <input type="file" name="image_url" id = "image_url" accept=".jpg, .jpeg, .png" value=""> <br> <br>

                    <button type="submit" class="but" name="submit"> Register</button>
                    
                    <button type="submit"class="but" ><a href="table.php">Go to the Liste</a></button>

                    <button type="submit"class="but" ><a href="login.php">login</a></button>
                    
                    <br><br>
                
         </div>
           
        </form>
    </body>
</html>