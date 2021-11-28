<?php include ("../connexion.php"); ?>
<?php
 $code=$_POST['code'];
 $titre=$_POST['titre'];
 $auteur=$_POST['auteur'];
 echo $code;
 echo $titre;
 echo $auteur;
 $date = date('Y-m-d', strtotime($_POST['date']));
 $requet="insert into livre (`CodeLivre`, `titre`, `auteur`, `dateEdition`) 
 values
 ('$code','$titre','$auteur','$date')";
 $ok=mysqli_query($idcon, $requet);
 if($ok==FALSE)
 echo "Problème d'insertion <br/>"; 
 else
 echo "Insertion efectuée avec succes <br/>"; 
?>
<?php include ("../deconnexion.php"); ?>