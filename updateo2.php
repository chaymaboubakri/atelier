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
if(!isset($_POST["nomo"]))
header("location:ouvrier.php");
include ( 'connexion.php');
$rq=" UPDATE ouvrier 
SET nomo= :nomo,
prenomo= :prenomo,
nummachine= :nummahine,
numarticle= :numarticle,
nbH= :nbH
where ido=:ido" ;

$stm=$connexion->prepare($rq);


$tab=array("ido"=>$_POST['ido'],
"prenomo"=>$_POST['prenomo'],
"nummachine"=>$_POST['nummachine'],
"numarticle"=>$_POST['numarticle'],
"nbH"=>$_POST['nbH'],
"sparheure"=>$_POST['sparheure'],"stravail"=>$_POST['stravail']);
$r=$stm->execute($tab);
if($r)
header("location:ouvrier.php?message ok ");
else
header("location:ouvrier.php?message echec ");


?>
</body>
</html>