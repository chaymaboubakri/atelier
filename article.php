<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border width="50%">
<tr ><th colspan=11 >liste des articles</th></tr>
<tr>
    <td>numero article</td>
    <td>nom article</td>
    <td>id ouvrier</td>
    <td>quantité</td>
    <td>date de debut de fabrication</td>
    <td>DDLplutot</td>
    <td>DDLplutard</td>
    <td>num client</td>
    <td>situation </td>
    <td> </td>
    <td> </td>
    </tr>
<?php

include("connexion.php");


 foreach($tab as $A) echo"
       <tr>
            <td>".$A["Nomarticl"]." </td>
            <td>". $A["nomarticle"] ." </td>
            <td>" . $A["ido"]." </td>
            <td> ". $A["quantite"] ." </td>
            <td>". $A["DDF"] ." </td>
            <td>". $A["DDLplutard"] ." </td>
            <td>". $A["DDLplutot"] ." </td>
            <td>". $A["numc"] ." </td>
            <td>". $A["situation"] ." </td>
            <td> mise à jour  </td>
            <td>supprimer </td>
        </tr>"

    
    ;
    ?>
   

</table> 
</body>
</html>