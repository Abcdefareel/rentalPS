<?php
session_start();
    if (isset($_SESSION['found']) == true) {
        session_destroy();
        header("Location: http://localhost:8080/login.php");
        exit;
    }   
?>