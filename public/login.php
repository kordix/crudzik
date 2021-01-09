<?php
session_start();

$_SESSION['zalogowany'] = true;

echo $_SESSION['zalogowany'];


?>