<?php

include 'connect.php';

$stmt = $db->prepare("UPDATE names set postcode = :postcode
                      WHERE firstname = :firstname");

$stmt->bindValue(':firstname', 'Jenny');
$stmt->bindValue(':postcode', 'S88 123');
$stmt->execute();

?>