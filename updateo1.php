<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ido = $_GET['ido'];
    include("connexion.php");
    $rq ="SELECT ido, nomo, prenomo, nummachine, numarticle, nbH, sparheure, stravail FROM ouvrier WHERE ido=:ido";
$stm=$connexion->prepare($rq);
$parms=array('ido'=>$_GET['ido']);
$stm->execute($parms);
$tabo=$stm->fetchAll(PDO::FETCH_ASSOC);
$ouvrier = $tab[0];

    ?>
<form action="updateo2.php" method="post">
    <input type="hidden" name="ido" value="<?=$ouvrier['ido'];?>" />
    nom	<input value="<?=$ouvrier['nomo'];?>" type="text" name="nomo" /><br />
    prenom <input value="<?=$ouvrier['prenomo'];?>" type="text" name="prenomo" /><br />
    numero machine <input value="<?=$ouvrier['nummachine'];?>" type="text" name="nummachine" /><br />
    numero article <input value="<?=$ouvrier['numarticle'];?>" type="text" name="numarticle" /><br />
    nbheure <input value="<?=$ouvrier['nbH'];?>" type="text" name="nbH" /><br />
    salaire par heure <input value="<?=$ouvrier['sparheure'];?>" type="text" name="sparheure" /><br />
    situation <select name="stravail">
			<option>1</option>
            <option>1</option>
            </select>
	<input type="submit" value="modifier" />
</form>
</body>
</html>