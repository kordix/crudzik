<?php
$id=$_POST['id'];
require_once('db.php');
require_once('handlerequest.php');

//replace
$sth = $dbh->prepare("UPDATE klienci SET imie=?,nazwisko=?,miasto=?,data=? WHERE id=?");

//replace
if($sth->execute([$imie,$nazwisko,$miasto,$data,$id]) ==false ){
      echo 'nie udało się';
    }


header('Location: /index.php');
?>



<a href="/">główna</a>
