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
  
    if (isset($_GET["nummachine"]))
    {
    include("connexion.php");
    $sql="DELETE FROM `$machine` WHERE $nummachine=:nummachine";
    $st=$connexion->prepare($sql);
    $tab=array('nummachine'=>$_GET["nummachine"]);
    $R=$st->execute($tab);
    if($R){
        echo "une machine est supprimée";
    }
    else echo "error";
}
else
   header("location:machine.php");
        ?>
    

</body>
</html>