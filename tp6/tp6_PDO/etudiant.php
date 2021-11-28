<?php
class etudiant
{
    public $codeEtudiant;
    public $nom;
    public $prenom;
    public $adresse;
    public $classe;

    function __construct()
    {
        
    }

    function listEtudiant(){
        require_once("config.php");
        $cxn = new connexion();
        $pdo = $cnx->CNXbase();
        $req = "SELECT * FROM etudiant";
        $res = $pdo->query($req);
        return $res;
    }

    function insertEtudiant(){
        require_once("config.php");
        $cxn = new connexion();
        $pdo = $cnx->CNXbase();
        $req="insert into etudiant values
        ('$code','$nom','$prenom','$adresse','$classe')";
        $res = $pdo->exec($req);
        
    }

    function recherche_Etud($id) {
        
require_once('config.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();
$req= "SELECT count(*) FROM etudiant WHERE codeEtudient=$id " ;
$res=$pdo->query($req);
return $res;
    }
    
function supprimer_user($id)
{
require_once('config.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();
$req="DELETE FROM personne WHERE id=$id"; 
$pdo->exec($req);
}





    
}

?>