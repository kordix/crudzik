<?php
$id=$_POST['id'];
require_once('db.php');
require_once('handlerequest.php');

//replace
$sth = $dbh->prepare("UPDATE klienci SET imie=?,nazwisko=?,miasto=?,ulica=? WHERE id=?");

//replace
if($sth->execute([$imie,$nazwisko,$miasto,$ulica,$id]) ==false ){
      echo 'nie udało się';
    }


header('Location: /index.php');
?>



<a href="/">główna</a>
