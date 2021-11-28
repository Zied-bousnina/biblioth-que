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
        <legend><h1 style="color:blue">Recherche un Etudiant</h1></legend>
        Veuillez selectionner un critère de recherche :
        <form action="rechercheEtud_action.php " method="post">
            <table>
                <tr>
                    <td>Critère :</td>
                    <td><select name="champ" id="">
                        <option value="codeEtudient">CodeEtudiant</option>
                        <option value="nom">Nom</option>
                        <option value="prenom">Prenom</option>
                        <option value="Adresse">Adresse</option>
                        <option value="class">Classe</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Valeur :</td>
                    <td><input type="text" name="valeur" id=""></td>
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