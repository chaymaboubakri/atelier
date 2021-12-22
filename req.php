<?php
include("connexion.php");
$R = $connexion -> query ("SELECT * FROM `ouvrier`" );
$tab = $R->fetchAll()
?>