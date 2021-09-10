<?php
header('Content-Type: application/json');
include "db.php";


$studentName = $_POST['studentName'];
$level = $_POST['level'];
$matNumber = $_POST['matNumber'];
$paid =  $_POST['paid'];
$department =  $_POST['department'];

$stmt = $db->prepare("INSERT INTO student (studentName,level,matNumber,paid, department) VALUES (?, ?,?, ?,?)");
$result = $stmt->execute([$studentName, $level,$matNumber, $paid, $department]);

echo json_encode([
'success' => $result
]);