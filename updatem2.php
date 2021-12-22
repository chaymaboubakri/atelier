<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(!isset($_POST["numemachine"]))
header("location:machine.php");
include ( 'connexion.php');
$rq=" UPDATE 'machine'
SET 'nummachine'= :nummachine,
'dateAchat'= :dateAchat,
'cout'= :cout,
'fonctionnement'= :fonctionnement,
'ido'= :ido
where 'nummachine'=:nummachine" ;

$stm=$connexion->prepare($rq);


$tab1=array("nummachine"=>$_POST["nummachine"],"datAchat"=>$_POST["dateAcht"],"cout"=>$_POST["cout"],
"fonctionnement"=>$_POST["fonctionnement"],"ido"=>$_POST["ido"]);
$r=$stm->execute($tab1);
if($r)
header("location:machine.php?message ok ");
else
header("location:machine.php?message echec ");


?>
</body>
</html>