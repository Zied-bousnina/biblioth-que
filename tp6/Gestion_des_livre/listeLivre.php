<?php
$idcon=mysqli_connect("localhost" ,"root", "");
$okbd=mysqli_select_db($idcon ,"biblio");
$requet="SELECT * from livre";
$res= mysqli_query($idcon, $requet);
?>
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
        <legend><h1 style="color:blue">Liste des Etudiants</h1></legend>

        <form action="listeEtudiants.php" method="post">

            <table border="2">
                <tr>
                    
 <th > Code Livre</th>
 <th> Titre</th>
 <th> Auteur</th>
 <th> Date Edition</th>
</tr>
<?php
while($ligne=mysqli_fetch_array($res))
{
?>
<tr>
 <td><?php echo $ligne[0]; ?></td>
 <td><?php echo $ligne[1]; ?></td>
 <td><?php echo $ligne[2]; ?></td>
 <td><?php echo $ligne[3]; ?></td>
 
</tr>
<?php
}
mysqli_close($idcon);
?>
</table>
</form>
    </fieldset>
    
</body>
</html>