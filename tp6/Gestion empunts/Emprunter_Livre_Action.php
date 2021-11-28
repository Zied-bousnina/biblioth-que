<?php
$codeE = $_POST['code'] ;
$codeL = $_POST['livre'] ;

require_once('config.php');
$cnx = new connexion();
$pdo = $cnx->CNXbase();
echo date('Y-m-d')."<br>";
$date = date('Y-m-d');
$req1 = "SELECT count(*) FROM `etudiant` WHERE codeEtudient = $codeE ";
$req2 = "SELECT count(*) FROM `livre` WHERE CodeLivre = $codeL ";

$res1 =$pdo->query($req1);
$res2 = $pdo->query($req2);
$n1 = $res1->fetchColumn(0);
$n2 = $res2->fetchColumn(0);

if ($n1 ==1 && $n2==1  ) {
    $req = "INSERT INTO `emprunter` values($date, $codeE, $codeL)";
$pdo->exec($req);
header('location:index.html');
}else {
    echo "<script>alert('code etudiant OR code Livre Existe pas dans la base')</script>";
header('location:Emprunter_livre.php');

}



?>