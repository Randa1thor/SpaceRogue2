<?php

include_once("../database/databaseconnect.php");

$sql="SELECT * FROM test";
$stmt=$pdo->query($sql);

echo json_encode($stmt->fetchAll());

echo "Bob";

 ?>
