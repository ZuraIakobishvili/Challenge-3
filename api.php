<?php

$json_data = file_get_contents("http://hp-api.herokuapp.com/api/characters");
$data = json_decode($json_data , JSON_OBJECT_AS_ARRAY);

?>