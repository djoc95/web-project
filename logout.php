<?php
    session_start();
    unset($_SESSION['logged']);
    $_SESSION['logged'] = false;
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit;
?>