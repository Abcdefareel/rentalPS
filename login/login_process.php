<?php
session_start();
$dataJson = "../database/user.json";
$data = file_exists($dataJson) ? json_decode(file_get_contents($dataJson), true) : [];

if (isset($_POST['loginUser'])) {
    $identifier = $_POST['identifier'];
    $password = $_POST['password'];

    $userFound = false;
    $alert = "";
    foreach ($data as $user) {
        if (($user['username'] === $identifier || $user['email'] === $identifier) && $user['password'] === $password) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['photo'] = $user['photo'];
            $userFound = true;
            break;
        }
    }

    if ($userFound) {
        $_SESSION['found'] = $userFound;


        header("Location: http://localhost:8080/dashboard/index.php");
        exit;
    } else {
        $alert = "Invalid username/email or password.";
    }

    $_SESSION['alert'] = $alert;

    file_put_contents($dataJson, json_encode($data, JSON_PRETTY_PRINT));

    header("Location: http://localhost:8080/login.php");
    exit;
}
