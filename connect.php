<?php

try {
  $db = new PDO('mysql:host=localhost;dbname=testdb;charset=utf8', 'root', 'pass');
  //var_dump($db);
}

catch(Exception $e) {
  //echo $e->getMessage();
  echo "An error has occurred!";
}


?>