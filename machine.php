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
include("connexion.php");


 foreach($tab as $M) echo"
       <tr>
            <td>".$M["nummachine"]." </td>
            <td>". $M["`dateAchat`"] ." </td>
            <td>" . $M["cout"]." </td>
            <td> ". $M["fonctionnement"] ." </td>
            <td>". $M["ido"] ." </td>
        </tr>"

    
    ;
    ?>
   

</table>


 
    
</body>
</html>