<?php
require_once('db.php');
require_once('handlerequest.php');

//REPLACE
$sth = $dbh->prepare('INSERT INTO klienci(imie,nazwisko,miasto,data) VALUES (?,?,?,?)');

if ($sth->execute([$imie,$nazwisko,$miasto,$data]) == false) {
    echo 'error';
  }

  header('Location: /');


?>