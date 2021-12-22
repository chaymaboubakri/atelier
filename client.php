<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border width="50%">
<tr ><th colspan=9 >liste des clients</th></tr>
<tr>
    <td>idc</td>
    <td>nomprenom</td>
    <td>tel</td>
    <td>adresse</td>
    <td>numC</td>
    <td>DDLplutot</td>
    <td>DDLplutard</td>
    <td> </td>
    <td> </td>
    </tr>
    
<?php

include("connexion.php)

 foreach($tab as $C) echo"
       <tr>
            
            <td>". $C["nomprenom"] ." </td>
            <td>" . $C["tel"]." </td>
            <td> ". $C["adresse"] ." </td>
            <td>". $C["numC"] ." </td>
            <td>". $C["DDLplutot"] ." </td>
            <td>". $C["DDLplutard"] ." </td>
            
            
            <td> mise à jour  </td>
            <td>supprimer </td>
        </tr>"

    
    ;
    ?>
   

</table>
    
</body>
</html>