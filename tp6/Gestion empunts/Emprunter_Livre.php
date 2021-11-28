<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Emprunter_Livre_Action.php" method="post">  
        <fieldset>
            <legend>Empunter Livre</legend>
            <table>
               
                <tr>
                    <td>Code Etudiant :</td>
                    <td> <input type="number" name="code" id=""> </td>
                </tr>
                <tr>
                    <td>Code Livre :</td>
                    <td> <input type="number" name="livre" id=""> </td>
                </tr>
                <tr>
                    <td><input type="submit" value="Emprunter"></td>
                    <td><input type="reset" value="Annuler"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    
    
</body>
</html>