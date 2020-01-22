<?php
require_once('db.php');
require_once('handlerequest.php');

//REPLACE
$sth = $dbh->prepare('INSERT INTO klienci(imie,nazwisko,miasto,ulica) VALUES (?,?,?,?)');

if ($sth->execute([$imie,$nazwisko,$miasto,$ulica]) == false) {
    echo 'error';
  }

  header('Location: /');


?>