<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nummachine = $_GET['nummachine'];
    include("connexion.php");
    $rq ="SELECT 'nummachine', 'dateAchat', 'cout', 'fonctionnement', 'ido' FROM machine WHERE $nummachine=:nummachine";

    $stm=$connexion->prepare($rq);

$parms=array('nummachine'=>$_GET['nummachine']);

$stm->execute($parms);

$tabm=$stm->fetchAll(PDO::FETCH_ASSOC);
$ouvrier = $tabm[0];

    ?>
<form action="updatem2.php" method="post">
    <input type="text" name="nummachine" value="<?=$machine['nummachine'];?>" />
    date d'achat<input value="<?=$machine['dateAchat'];?>" type="Date" name="dateAchat" /><br />
    cout <input value="<?=$machine['cout'];?>" type="text" name="cout" /><br />
    fonctionnement <select name="fonctionnement">
        <option> 1 </option>
        <option>0 </option> <br/>
    ido <input value="<?=$machine['ido'];?>" type="text" name="ido" /><br />
	<input type="submit" value="modifier" />
</form>
</body>
</html>