<?php include ("../connexion.php"); ?>
<?php
 $code=$_POST['code'];
 $titre=$_POST['titre'];
 $auteur=$_POST['auteur'];
 $date = date('Y-m-d', strtotime($_POST['date']));
 $requet="update livre set titre='$titre', auteur='$auteur', 
DateEdition ='$date'  where codeLivre 
='$code'";

 $ok=mysqli_query($idcon, $requet);
 if($ok==FALSE)
 echo "Problème d'insertion <br/>"; 
 else
 echo "Insertion efectuée avec succes <br/>"; 
?>
<?php include ("../deconnexion.php"); ?>