
<?php include ("connexion.php"); ?>
<?php
 $code=$_POST['code'];
 $nom=$_POST['nom'];
 $prenom=$_POST['prenom'];
 $adresse=$_POST['adresse'];
 $classe=$_POST['classe'];
 $requet="update etudiant set nom='$nom', prenom='$prenom', 
Adresse ='$adresse', class='$classe' where codeEtudient 
='$code'";

 $ok=mysqli_query($idcon, $requet);
 if($ok==FALSE)
 echo "Problème d'insertion <br/>"; 
 else
 echo "Insertion efectuée avec succes <br/>"; 
?>
<?php include ("deconnexion.php"); ?>