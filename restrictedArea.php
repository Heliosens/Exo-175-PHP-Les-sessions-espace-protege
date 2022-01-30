<?php
session_start();
if(!isset($_SESSION['status']) || $_SESSION['status'] === 'error'){
    header('Location: /index.php');
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>restricted area</title>
</head>
<body>
    <h1>Espace protégé</h1>
</body>
</html>
