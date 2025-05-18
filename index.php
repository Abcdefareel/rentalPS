<?php
session_start();
if (isset($_SESSION['found']) == true) {
    header("Location: http://localhost:8080");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Register</h2>
        <form action="register/register_process.php" method="POST" class="space-y-4" enctype="multipart/form-data">
            <div>
                <?php
                if (isset($_SESSION['alertUsername'])) {
                    echo '<div style="color: red; font-weight: bold;">' . $_SESSION['alertUsername'] . '</div>';
                    unset($_SESSION['alertUsername']);
                }
                ?>
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" name="username" id="username" placeholder="Username" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <?php
                if (isset($_SESSION['alertEmail'])) {
                    echo '<div style="color: red; font-weight: bold;">' . $_SESSION['alertEmail'] . '</div>';
                    unset($_SESSION['alertEmail']);
                }
                ?>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" placeholder="Email" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <?php
                if (isset($_SESSION['alertPhoto'])) {
                    echo '<div style="color: red; font-weight: bold;">' . $_SESSION['alertPhoto'] . '</div>';
                    unset($_SESSION['alertPhoto']);
                }
                ?>
                <label for="photo" class="block text-sm font-medium text-gray-700">Foto</label>
                <input type="file" name="photo" id="photo" placeholder="photo"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>
            <button type="submit" name="registerUser"
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Register
            </button>
        </form>
        <p class="text-center text-sm text-gray-600 mt-4">
            Already have an account? <a href="login.php" class="text-blue-600 hover:underline">Login</a>
        </p>
    </div>
</body>

</html>