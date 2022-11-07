<?php
    session_start();
        unset($_SESSION['username']);
        unset($_SESSION['index']);
    session_destroy();
header("Location:../index.php");
?>