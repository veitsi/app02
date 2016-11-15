<?php
echo 'pdo =<br>';
// $pdo=new PDO('mysql:host=127.0.0.1;dbname=todo','username');
// echo 'pdo ='.$pdo;

$db = new PDO('sqlite:dogsDb_PDO.sqlite');
$db->exec("CREATE TABLE Dogs (Id INTEGER PRIMARY KEY, Breed TEXT, Name TEXT, Age INTEGER)");
