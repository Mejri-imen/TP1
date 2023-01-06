<?php
include 'insert.php';

$CIN=$_GET['editId'];
$stmt="SELECT * from etudiant where CIN=$CIN";
$result=mysqli_query($conn,$stmt);
$row=mysqli_fetch_assoc($result);

while($row = mysqli_fetch_assoc($result)){
    $CIN=$row['CIN'];
    $Nom=$row['Nom'];
    $Prénom=$row['Prénom'];
    $Date_de_naissance=$row['Date_de_naissance'];
    $Email=$row['Email'];
    $motpass = $row['Mot_de_passe'];
    $image_url = $row['image_url'];
}

if(isset($_POST['submit'])){
    $CIN = $_POST['CIN'];
    $Nom = $_POST['Nom'];
    $Prénom = $_POST['Prénom'];
    $Date_de_naissance = $_POST['Date_de_naissance'];
    $Email = $_POST['Email'];
    $motpass = $_POST['Mot_de_passe'];
    $image_url = $_POST['image_url'];

    $stmt ="UPDATE etudiant set CIN='$CIN', Nom='$Nom', Prénom='$Prénom', Date_de_naissance='$Date_de_naissance', Email='$Email',Mot_de_passe='$motpass', image_url='$image_url'  where CIN=$CIN";
    $result=mysqli_query($conn,$stmt);
    if($result){
        //echo "edit valider";
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
        
        <h1>Modifier</h1>
        <br>
          <h4>CIN:</h4> <input type="text" class="saisirIN" name="CIN" placeholder="Enter votre CIN" value=><br><br>
            
          <h4>Nom:</h4> <input type="text" class="saisirIN" name="Nom" placeholder="Enter votre nom" value=><br><br>

          <h4>Prenom:</h4><input type="text" class="saisirIN" name="Prénom" placeholder="Enter votre prenom" value=><br><br>

          <h4>Date de naissance:</h4> <input type="date" class="saisirIN" name="dn" placeholder="Enter votre Date de naissance"value=><br><br>

          <h4>Email:</h4><input type="email" class="saisirIN" name="Email" placeholder="Enter Email Address" onkeydown="validation()" value=><br>

          <h4>Mot de passe:</h4><input type="password" class="saisirIN" name="Mot de passe" placeholder="Mot de passe" ><br><br>
          
          <label for="image_url">Image : </label>
          <input type="file" name="image_url" id = "image_url" accept=".jpg, .jpeg, .png" value=""> <br> <br>


                <button type="submit" class="butt" name="submit"> Edit </button>
        
        </form> 
        </div> 
        
    </body>
</html>