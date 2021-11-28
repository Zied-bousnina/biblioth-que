<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<fieldset>
    <legend><h1 style=" color: blue">Nouveau Etudinet</h1></legend>
    Veiller rempir les champs Suivants :
  <form action=" modifierEtud_action.php" method="post">
  <table>
        <tr>
            <td>Code :</td>
            <td><input type="number" name="code" id=""></td>
        </tr>
        <tr>
            <td>Nom :</td>
            <td><input type="text" name="nom" id=""></td>
        </tr>
        <tr>
            <td>Prenom :</td>
            <td><input type="text" name="prenom" id=""></td>
        </tr>
        <tr>
            <td>Adresse :</td>
            <td><input type="text" name="adresse" id=""></td>
        </tr>
        <tr>
            <td>Classe</td>
            <td><input type="text" name="classe" id=""></td>
        </tr>
        <tr>
            <td><input type="reset" value="Annuler"></td>
            <td><input type="submit" value="Enregistrer"></td>
        </tr>
    </table>
  </form>
</fieldset>
    
</body>
</html>