<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  method="POST"   action="ouvrier.php">
 id ouvrier: <input  type="text"   name="ido"   id="ido"><br/>
 nom:<input   type="text"    name="nomo"   id="nomo">
 prenom:<input type="text"    name="prenomo"  id="prenomo"><br/>
 numero machine :<input  type="text"  name="numm"  id="numm">
 numero article :<input  type="text"  name="numA"  id="numA"><br/>
 nombre d'heure :<input  type="text"  name="nbh"  id="nbh">
 salaire par heure:<input  type="text"  name="sph"   id="sph"><br/>
 situation:<select name="stravail">
			<option>1</option>
            <optin>0</opyion>
	</select><br />
 <input type="submit"  name="envoyer"><br/>
</form>
</body>
</html>
