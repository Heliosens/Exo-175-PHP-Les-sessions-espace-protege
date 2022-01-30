<?php
session_start();
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
</head>
<body>
    <h1>Home</h1>
    <form action="checkAccess.php" method="post">
        <input type="password" name="pwd" placeholder="mot de passe">
        <input type="submit" name="userPwd">
    </form>
</body>
</html>
<?php
if(isset($_SESSION['status'])){
    echo $_SESSION['status'] === "error" ? "le mot de passe est incorrect" : "";
}
