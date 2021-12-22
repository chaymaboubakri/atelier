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
//insertion

include("connexion.php")
if(isset($_POST["idc"],$_POST["nomc"],
$_POST["prenomc"],$_POST["tel"],$_POST["adress"],
$_POST["numc"],$_POST["DDL"]))
{
    $rq="INSERT INTO 'client`('idc`, 'nomc', 'prenomc', 'tel', 'adress', 'numc', 'DDL') VALUES (:idc,:nomc,:prenomc,:tel,:adress,:numc,:DDL)";
    $pr=$connexion->prepare($rq);

    $tab1=array("idc"=>$_POST["idc"],"nomc"=>$_POST["nomc"],"prenomc"=>$_POST["prenomc"],
    "tel"=>$_POST["tel"],"adress"=>$_POST["adress"],
    "numc"=>$_POST["nmc"],"DDL"=>$_POST["DDL"]);

    $EX=$pr->execute($tab1);
}
 foreach($tab as $C) echo"
       <tr>
            
            <td>". $C["nomc"] ." </td>
            <td>". $C["prenomc"] ." </td>
            <td>" . $C["tel"]." </td>
            <td> ". $C["adress"] ." </td>
            <td>". $C["numc"] ." </td>
            <td>". $C["DDL"] ." </td>
        
            
            
           
	
            <td><a href="client.php?id=<?=$c["id"];?>">Delete</a></br>"
            <a href="client.php?id=<?=$c["id"];?>">Update</a></br>"
    
        </td>

</td>
        </tr>"

    
    
;
    ?>
   

</table>
<a href='formulaireajoutc.php'>Ajouter</a>
</body>
</html>
