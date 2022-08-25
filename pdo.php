<?php

$pdo = new PDO("mysql:host=localhost;dbname=harry_potter" , 'root','');
$statement= $pdo->prepare('SELECT * FROM harry');
$statement->execute();
$result_pdo = $statement->fetchAll(PDO::FETCH_ASSOC);

?>