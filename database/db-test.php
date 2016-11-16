<?php
error_reporting(-1);
ini_set('display_errors', 'On');

echo 'why not? ';
// $pdo=new PDO('mysql:host=127.0.0.1;dbname=todo','username');
// echo 'pdo ='.$pdo;

try {
  $db = new PDO('sqlite:app02.db');
}
catch (Exception $e) {
   echo $sql . "<br>" . $e->getMessage();
}
$cmnd=$db->prepare('select * from users');
$cmnd->execute();
$rez=$cmnd->fetchAll(PDO::FETCH_OBJ);
var_dump($rez);

//$db->exec("CREATE TABLE Dogs (Id INTEGER PRIMARY KEY, Breed TEXT, Name TEXT, Age INTEGER)");
// for ($i=2;$i<8;$i++){
//   $nm='qwertyui';
//   $ph=1000+$i*2;
//   $ph=(string) $ph;
//   $cmnd="INSERT INTO users VALUES (".$i.",'".$nm."','".$ph."');";
//   echo 'try to insert '.$cmnd;
//   $db->exec($cmnd);
//   //$db->prepare($cmnd)->execute();
// }


?>
