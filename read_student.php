<?php
header('Content-Type: application/json');
include "db.php";


$matNumber = 'servo';

$stmt = $db->prepare("SELECT * FROM student Where matNumber=?");
 $stmt->execute([$matNumber]);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($result);