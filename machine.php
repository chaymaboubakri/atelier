<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border width="50%">
<tr ><th colspan=10 >liste des machine</th></tr>
<tr>
<td>NUMERO MACHINE</td>
    <td>DATE_D_ACHAT</td>
    <td>COUT</td>
    <td>FONCTIONNEMENT</td>
    <td>ID OUVRIER</td>
    <td> </td>
    <td> </td>

</tr>

    
<?php
//inserction
include("connexion.php");
if(isset($_POST["nummachine"],$_POST["dateAchat"],
$_POST["cout"],$_POST["fonctionnement"],$_POST["ido"],))
{
    $rq="INSERT INTO 'machine`('nummachine`, 'dateAchat', 'cout', 'fonctionnement', 'ido') VALUES (:nummachine,:dateAchat,:cout,:fonctionnement,:ido)";

    $pr=$connexion->prepare($rq);

    $tab1=array("nummachine"=>$_POST["nummachine"],"datAchat"=>$_POST["dateAcht"],"cout"=>$_POST["cout"],
    "fonctionnement"=>$_POST["fonctionnement"],"ido"=>$_POST["ido"]);

    $EX=$pr->execute($tab1);
}



 foreach($tab1 as $M) echo"
       <tr>
            <td>".$M["nummachine"]." </td>
            <td>". $M["`dateAchat`"] ." </td>
            <td>" . $M["cout"]." </td>
            <td> ". $M["fonctionnement"] ." </td>
            <td>". $M["ido"] ." </td>
            <td><a href='update1.php?nummachine=$nummachine'>modifier</a> </td>
            <td><a href='deleteo.php?nummachine=$nummachine'>supprimer</a> </td>
        </tr>" ;
    ?>
   

</table>
<a href='formulaireajoutm.php'>Ajouter</a>

    
</body>
</html>
