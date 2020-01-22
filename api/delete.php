<?php
require_once 'db.php';

$data = json_decode(file_get_contents("php://input"), true);
$id = $data['id'];

//replace
$sth = $dbh->prepare("DELETE FROM klienci WHERE id=?");
$sth->execute([$id]);
//
// $sth->debugDumpParams();
//
//
// $dbDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//  $dbDB->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//
//  error_reporting( E_ALL );
//  ini_set( 'display_errors', 1 );




 ?>
