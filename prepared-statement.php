<?php

include 'connect.php';

$stmt = $db->prepare("SELECT * FROM names WHERE firstname LIKE ?");
$names = array('Andy', 'Brian', 'Godfrey');

foreach($names as $name) {
  $stmt->bindParam(1,$name);

  $stmt->execute();

  while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo htmlentities($row['firstname']) . " " . htmlentities($row['lastname']) . " " . htmlentities($row['postcode']) . "<br>";
    //echo "<pre>" . var_dump($row) . "</pre>";
  }
}

?>