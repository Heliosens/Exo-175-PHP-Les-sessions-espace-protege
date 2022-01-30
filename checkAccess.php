<?php
session_start();

if(isset($_POST['userPwd'], $_POST['pwd'])){
    $_SESSION['status'] = $_POST['pwd'] !== "le mot" ? 'error' : 'ok';

    if($_SESSION['status'] === 'ok'){
        header('Location: /restrictedArea.php');
    }
    else {
        header('Location: /index.php');
    }
}
