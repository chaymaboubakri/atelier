<?php
try{
 $connexion=new PDO("mysql:host=localhost:3307;dbname=atelier","root","")
 ;}catch(PDOException $e){die("erreur:".$e->getmessage());};
 $R = $connexion -> query ("SELECT `ido`, `nomo`, `prenomo`, `nummachine`, `numarticle`, `nbH`, `sparheure`, `stravail` FROM `ouvrier`" );
 $tab = $R->fetchAll()
 ?>