<?php 

 
$statement = $pdo->prepare(("
INSERT INTO harry(name, actor, house) VALUES( ?, ?, ?) "));
$statement->bindParam(1, $name, PDO::PARAM_STR);
$statement->bindParam(2, $actor, PDO::PARAM_STR);
$statement->bindParam(3, $house, PDO::PARAM_STR);
$count = $statement ->rowCount();
$statement->execute();
if($count>0){
    return false ;
}

?>