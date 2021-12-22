/*formulaire à remplir si l'article a un défaut*/
<html>
<form  method="GET"  action="defautarticle.php>
  entrer id :<input type="text"   name="ido" id="ido">
  entrer votre nom et prenom :<input   type="text"    name="nomprenom"  id="np" >
  entrer numero d'article : <input    type="text"     name="numA"  id="numA">
   situation article <select  name="situationa"  id="situationa>
                          <option>1</option>
                           <option>0</option> 
<input  type="submit"  name="envoyer"   id="envoyer">envoyer  
<input  type="delete"  name="envoyer"   id="envoyer">supprimer   
</form>
</html>

/*formulaire à remplir si une machine est en panne*/
<html>
<form   method="GET"    action="pannemachine.php" >
entrer id :<input  type="text"   name="ido"  id="ido">
entrer votre nom et prenom :<input   type="text"  name="np"  id="np">
entrer numero machine :<input    type="text"    name="numm"   id="numm">  
fonctionnement de la machine:<select  name="fmachine"  id="fmachine">
                                <option>1</option>
                                <option>0</option>
<input  type="submit"  name="envoyer"  >envoyer  
<input  type="delete"  name="envoyer"   >supprimer  
</form>  
</html>

/*formulaire ajout ouvrier*/
<html>
<form  method="POST"   action="ajoutO.php">
 id ouvrier: <input  type="text"   name="ido"   id="ido">
 nom:<input   type="text"    name="nomo"   id="nomo">
 prenom:<input type="text"    name="prenomo"  id="prenomo">
 numero machine :<input  type="text"  name="numm"  id="numm">
 numero article :<input  type="text"  name="numA"  id="numA">
 nombre d'heure :<input  type="text"  name="nbh"  id="nbh">
 salaire par heure:<input  type="text"  name="sph"   id="sph">
 <input type="submit"  name="envoyer">Ajouter
</form>
</html>
 