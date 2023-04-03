<?php

    session_start();
    session_destroy();
    setcookie('flag', 'true', time()-1, '/');
    header('location: login.php');
?>

