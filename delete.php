<?php
include 'insert.php';
if(isset($_GET['deleteId'])){
    $CIN=$_GET['deleteId'];

    $sql="DELETE from etudiant where CIN=$CIN";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo "Deleteed successfull";
        header('location:table.php');
    }else{
        echo "erreur";
    }
}

?>