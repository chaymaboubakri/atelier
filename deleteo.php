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
  
    if (isset($_GET["ido"]))
    {
    include("connexion.php");
    $sql="DELETE FROM `$ouvrier` WHERE $ido=:ido";
    $st=$conn->prepare($sql);
    $tab=array('ido'=>$_GET["ido"]);
    $R=$st->execute($tab);
    if($R){
        echo "un ouvrier est supprimé";
    }
    else echo "error";
}
else
   header("location:ouvrier.php");
        ?>
    

</body>
</html>