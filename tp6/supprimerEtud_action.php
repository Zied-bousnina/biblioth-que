<?php include ("connexion.php"); ?>
<?php
if (isset($_POST['code'])){

    $codeE=$_POST['code'];
    $requet="DELETE from etudiant WHERE codeEtudient = '$codeE'";
    $ok= mysqli_query($idcon, $requet);
    if($ok==FALSE)
    echo "Problème de suppression <br/>"; 
    else
    echo "Suppression effectuée avec succes <br/>"; 
}
?>
<?php include ("deconnexion.php"); ?>