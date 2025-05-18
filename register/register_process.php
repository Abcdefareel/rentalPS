<?php
session_start();

$dataJson = "../database/user.json";
$data = file_exists($dataJson) ? json_decode(file_get_contents($dataJson), true) : [];

if (isset($_POST['registerUser'])) {
    $i = 0;
    if (!empty($data)) {
        $lastItem = end($data);
        $i = $lastItem['id'];
    }

    $username = $_POST['username'];
    $email = $_POST['email'];
    $passwrd = $_POST['password'];
    $photo = $_FILES['photo'];

    // Validasi file upload
    $foto = "";
    if (!empty($_FILES['photo']['name'])) {
        $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);

        $foto = $i + 1 . "." . $ext;

        move_uploaded_file($_FILES['photo']['tmp_name'], '../file-upload/' . $foto);
    }


    $alert = "";
    $showAlert = false;
    foreach ($data as $item) {
        if ($email == $item['email']) {
            $alert = "Email sudah terdaftar";
            $_SESSION['alertEmail'] = $alert;
            $showAlert = true;
            break;
        }
    }
    if (!$showAlert) {
        $data[] = [
            'id' => $i + 1,
            'photo' => "file-upload/" . $foto,
            'username' => $username,
            'email' => $email,
            'password' => $passwrd,
        ];


        file_put_contents($dataJson, json_encode($data, JSON_PRETTY_PRINT));
        header("Location: http://localhost:8080/login.php");
        exit;
    }
}
