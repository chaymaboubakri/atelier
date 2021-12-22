<!!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border width="50%">
<tr ><th colspan=10 >liste des ouvriers</th></tr>
<tr>
    <td>ido</td>
    <td>nom</td>
    <td>prenom</td>
    <td>numeromachine</td>
    <td>numeroarticle</td>
    <td>nbH</td>
    <td>sparheure</td>
    <td>stravail</td>
    <td> </td>
    <td> </td>
    </tr>
  
<?php

//insertion
include("connexion.php");
if(isset($_POST["ido"],$_POST["nom"],
$_POST["prenom"],$_POST["numeromachine"],$_POST["numeroarticle"],
$_POST["nbH"],$_POST["sparheure"],$_POST["stravail"])){
    $rq="INSERT INTO ouvrier('ido`, 'nomo', 'prenomo', 'nummachine', 'numarticle', 'nbH', 'sparheure', 'stravail') 
    VALUES (:ido,:nomo,:prenomo,:nummachine,:numarticle,:nbH,:sparheure,:stravail)";
    $pr=$connexion->prepare($rq);
    $tab1=array("ido"=>$_POST["ido"],"nom"=>$_POST["nom"],"prenom"=>$_POST["prenom"],
    "numeromachine"=>$_POST["numeromachine"],"numeroarticle"=>$_POST["numeroarticle"],
    "nbH"=>$_POST["nbH"],"sparheure"=>$_POST["sparheure"],"stravail"=>$_POST["stravail"]);
    $EX=$pr->execute($tab1);
}


 foreach($tab1 as $O) echo"
       <tr>
            <td>".$O["ido"]." </td>
            <td>". $O["nomo"] ." </td>
            <td>" . $O["prenomo"]." </td>
            <td> ". $O["nummachine"] ." </td>
            <td>". $O["numarticle"] ." </td>
            <td>". $O["nbH"] ." </td>
            <td>". $O["sparheure"] ." </td>
            <td>". $O["stravail"] ." </td>
            <td><a href='update1.php?id=$idO'>modifier</a> </td>
            <td><a href='deleteo.php'>supprimer</a> </td>
        </tr>
       "
       
    ?>
       

    
    
   

</table>
<a href='formulaireajouto.php'>Ajouter</a>
    
</body>
</html>