<?php
session_start();

if(!isset($_SESSION['zalogowany'])){
    header('Location: /login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jedziemy</title>
</head>
<body>
    
<div id ="app">
<button id="test" @click="test">test</button>

<app></app>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    

<?php include('../components/app.php') ?>

<?php include('../components/test.php') ?>


<script src="script.js"></script>

</body>
</html>