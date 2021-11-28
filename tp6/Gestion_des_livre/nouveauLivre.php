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
    <legend><h1 style=" color: blue">Nouveau modifierLivre_action</h1></legend>
    Veiller rempir les champs Suivants :
  <form action="nouveau_action.php" method="post">
  <table>
        <tr>
            <td>Code :</td>
            <td><input type="number" name="code" id=""></td>
        </tr>
        <tr>
            <td>Titre :</td>
            <td><input type="text" name="titre" id=""></td>
        </tr>
        <tr>
            <td>Auteur :</td>
            <td><input type="text" name="auteur" id=""></td>
        </tr>
        <tr>
            <td>Date Edition :</td>
            <td><input type="date" name="date" id=""></td>
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