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
    <legend><h1 style="color:blue">Supprimer Eudiant</h1></legend>
    Veiller remplir les champs suivants:
    <form action="supprimerLiv_action.php" method="post">
        <table>
            <tr>
                <td>Code livre :</td>
                <td><input type="number" name="code" id="" ></td>
            </tr>
            <tr>
                <td><input type="reset" value="Annuler"></td>
                <td><input type="submit" value="Executer"></td>
            </tr>
        </table>
    </form>
</fieldset>
    
</body>
</html>