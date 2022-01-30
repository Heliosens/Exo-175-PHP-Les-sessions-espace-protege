<?php
session_start();

if(isset($_POST['userPwd'])){
    $_POST['pwd'] !== "le mot" ? header('Location: /index?error=1') : null;
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
