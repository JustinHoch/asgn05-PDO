<?php

include 'connect.php';

$stmt = $db->prepare("SELECT * FROM names WHERE firstname = :firstname");

$stmt->bindValue(':firstname', 'Andy'); // PDO::PARAM_STR is optional when using mysql

$stmt->execute();

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  echo htmlentities($row['firstname']) . " " . htmlentities($row['lastname']) . " " . htmlentities($row['postcode']) . "<br>";
  //echo "<pre>" . var_dump($row) . "</pre>";
}


?>