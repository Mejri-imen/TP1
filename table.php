<?php
include 'insert.php';
?>


<!doctype html>
<html>
<head>
<link rel="stylesheet" href="tp2 css.css"/>
</head>
<body>
<button class="but1"><a href="exercice1.php">Add user</a>
</button>
<button class="but1"><a href="login.php">login</a>
</button><br><br><br>
<table class="table">
            <tr>
                <th>CIN</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de naissance</th>
                <th>Email</th>
                <th>Mot de passe</th>
                <th>Image</th>
                
                <th>Edit</th> 
                <th>Delete</th>
            </tr>
            
            <?php
            
            $servername = "127.0.0.1";
            $username = "root";
            $password = "";
            $nomBS ="etudiant";
            
            $conn = mysqli_connect($servername, $username, $password, $nomBS);

            
            
            $result = mysqli_query($conn,"SELECT * FROM etudiant");
            if($result){

            while($row = mysqli_fetch_assoc($result)){
                $CIN=$row['CIN'];
                $Nom=$row['Nom'];
                $Prénom=$row['Prénom'];
                $dn=$row['Date_de_naissance'];
                $Email=$row['Email'];
                $motpass = $row['Mot_de_passe'];
                $image_url = $row['image_url'];
            }}?>

<?php
      $i = 1;
      $rows = mysqli_query($conn, "SELECT * FROM etudiant ORDER BY CIN DESC")
      ?>

      <?php foreach ($rows as $row) : ?>
      <tr>
        <td><?php echo $row["CIN"]; ?></td>
        <td><?php echo $row["Nom"]; ?></td>
        <td><?php echo $row["Prénom"]; ?></td>
        <td><?php echo $row["Date_de_naissance"]; ?></td>
        <td><?php echo $row["Email"]; ?></td>
        <td><?php echo $row["Mot_de_passe"]; ?></td>
        <td> <img src="img/<?php echo $row["image_url"]; ?>" width = 200 title="<?php echo $row['image_url']; ?>"> </td>
        <td>
                <button class="butt"><a href="edit.php?editId='.$CIN.'">Edit</a></button>
                </td>
                <td>
                <button class="butt"><a href="delete.php?deleteId='.$CIN.'">Delete</a></button>
                </td>
      </tr> 
      <?php endforeach; ?>
            
            
        </table>
    
</body>
</html>