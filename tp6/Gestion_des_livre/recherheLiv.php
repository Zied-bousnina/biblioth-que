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
        <legend><h1 style="color:blue">Recherche un Livre</h1></legend>
        Veuillez selectionner un critère de recherche :
        <form action="rechercheLIV_action.php" method="post">
            <table>
                <tr>
                    <td>Critère :</td>
                    <td><select name="champ" id="">
                        <option value="CodeLivre">Code livre</option>
                        <option value="titre">Titre</option>
                        <option value="auteur">Auteur</option>
                        <option value="dateEdition">Date Edition</option>
                      
                    </select></td>
                </tr>
                <tr>
                    <td>Valeur :</td>
                    <td><input type="text" name="valeur" id=""></td>
                    <!-- <td><input type="date" name="valeur" id=""></td> -->
                </tr>
                <tr>
                    <td><input type="reset" value="Annuler"></td>
                    <td><input type="submit" value="Rechercher"></td>
                </tr>
            </table>
        </form>
    </fieldset>
    
</body>
</html>