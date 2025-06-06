<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6 mt-6 ">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Login</h2>
            <?php if (isset($_SESSION['alert'])): ?>
            <div style="color: red; font-weight: bold;">
                <?= $_SESSION['alert'] ?>
            </div>
            <?php endif; ?>
            <?php unset($_SESSION['alert']); ?>
        <form action="login/login_process.php" method="POST" class="space-y-4">
                <div>
                <label for="login-username" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="text" name="identifier" id="login-username" placeholder="Email" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label for="login-password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="login-password" placeholder="Password" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>
            <button type="submit" name="loginUser"
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Login
            </button>
        </form>
        <p class="text-center text-sm text-gray-600 mt-4">
            Don't have an account? <a href="index.php" class="text-blue-600 hover:underline">Register</a>
        </p>
    </div>
</body>
</html>
