<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$nomBS ="etudiant";

$conn = mysqli_connect($servername, $username, $password, $nomBS);
if(!$conn)
 echo "registration successfully..";

if (isset($CIN) || isset($Nom) || isset($Prénom) || isset($dn) || isset($Email) || isset($motpass) ){
$CIN = $_POST['CIN'];
$Nom = $_POST['Nom'];
$Prénom = $_POST['Prénom'];
$Date_de_naissance = $_POST['Date_de_naissance'];
$Email = $_POST['Email'];
$motpass = $_POST['Mot_de_passe'];


$stmt ="INSERT INTO etudiant(CIN, Nom, Prénom, Date_de_naissance, Email, Mot_de_passe) values('$CIN','$Nom','$Prénom','$Date_de_naissance','$Email','$motpass')";
if(!Mysqli_query($conn,$stmt))
echo"non valider";
else
echo"valider";
}
?>


