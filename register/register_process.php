<?php
    session_start();

    $dataJson = "../database/user.json";
    $data = file_exists($dataJson) ? json_decode(file_get_contents($dataJson), true) : [];

    if (isset($_POST['registerUser'])) {
        $i = 0;
         if (!empty($data)) {
            $lastitenm = end($data);
            $i = $lastitenm['id'] + 1;
         }

         $username = $_POST['username'];
         $email = $_POST['email'];
         $password = $_POST['password'];


        foreach ($data as $user) {
            if ($user['email'] === $email) {
                $_SESSION['alertEmail'] = "Email already exists.";
                header("Location: http://localhost:8080");
                exit;
            }
            
        }

         $data[] = [
            'id' => $i + 1,
            'username' => $username,
            'email' => $email,
            'password' => $password
        ];

         file_put_contents($dataJson, json_encode($data, JSON_PRETTY_PRINT));
         header("Location: http://localhost:8080/login.php");
         exit;
         
    }

?>