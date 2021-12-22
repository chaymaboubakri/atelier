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
  
    if (isset($_GET["idc"]))
    {
    include("connexion.php");
    $sql="DELETE FROM `$client` WHERE $idc=:idc";
    $st=$connexion->prepare($sql);
    $tab=array('idc'=>$_GET["idc"]);
    $R=$st->execute($tab);
    if($R){
        echo "un client est supprimé";
    }
    else echo "error";
}
else
   header("location:client.php");
        ?>
    

</body>
</html>