<?php
require_once 'db.php';

// $dbh = null;

$id = $_GET['id'];
//REPLACE
$query_run = $dbh->prepare("SELECT * FROM klienci  where id = ?");
$query_run->execute([$id]);

class dummy {}


$rows = $query_run->fetchAll(PDO::FETCH_CLASS, "dummy");


$results=[];

// foreach ($rows as $row) {
//     foreach (get_object_vars($row) as $key => $value) {
//     $row->$key = (mb_detect_encoding($value, mb_detect_order(), true) === 'UTF-8') 
//             ? $value : iconv('windows-1250', 'utf-8', $value);
//     }
//     $results[] = $row;
// }


echo json_encode($rows[0]);
