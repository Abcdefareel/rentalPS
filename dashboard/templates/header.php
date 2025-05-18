<?php
session_start();
if (isset($_SESSION['found']) == false) {
    header("Location: http://localhost:8080");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PS Rental Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-50 font-sans">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md hidden md:block">
            <div class="p-4 border-b border-gray-200">
                <h1 class="text-xl font-bold text-indigo-600 flex items-center">
                    <i class="fas fa-gamepad mr-2"></i>
                    <span>PS Rental</span>
                </h1>
            </div>
            <nav class="p-4">
                <ul class="space-y-2">
                    <li>
                        <a href="/dashboard" class="flex items-center p-2 text-indigo-600 bg-indigo-50 rounded-lg">
                            <i class="fas fa-tachometer-alt mr-3"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/bookings.php" class="flex items-center p-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                            <i class="fas fa-calendar-alt mr-3"></i>
                            <span>Bookings</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/consoles.php" class="flex items-center p-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                            <i class="fas fa-gamepad mr-3"></i>
                            <span>Consoles</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/customers.php" class="flex items-center p-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                            <i class="fas fa-users mr-3"></i>
                            <span>Customers</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/reports.php" class="flex items-center p-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                            <i class="fas fa-chart-line mr-3"></i>
                            <span>Reports</span>
                        </a>
                    </li>
                    <li>
                        <a href="../logout/logout_proccess.php" class="flex items-center p-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                            <i class="fas fa-cog mr-3"></i>
                            <span>Log Out</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Mobile sidebar toggle -->
        <div class="md:hidden fixed bottom-4 right-4 z-50">
            <button id="sidebarToggle" class="p-3 bg-indigo-600 text-white rounded-full shadow-lg">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <!-- Mobile sidebar (hidden by default) -->
        <div id="mobileSidebar" class="fixed inset-0 bg-white z-40 hidden">
            <div class="p-4 border-b border-gray-200 flex justify-between items-center">
                <h1 class="text-xl font-bold text-indigo-600 flex items-center">
                    <i class="fas fa-gamepad mr-2"></i>
                    <span>PS Rental</span>
                </h1>
                <button id="closeSidebar" class="text-gray-500">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <nav class="p-4">
                <ul class="space-y-2">
                    <li>
                        <a href="/dashboard" class="flex items-center p-2 text-indigo-600 bg-indigo-50 rounded-lg">
                            <i class="fas fa-tachometer-alt mr-3"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/bookings.php" class="flex items-center p-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                            <i class="fas fa-calendar-alt mr-3"></i>
                            <span>Bookings</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/consoles.php" class="flex items-center p-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                            <i class="fas fa-gamepad mr-3"></i>
                            <span>Consoles</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/customers.php" class="flex items-center p-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                            <i class="fas fa-users mr-3"></i>
                            <span>Customers</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/reports.php" class="flex items-center p-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                            <i class="fas fa-chart-line mr-3"></i>
                            <span>Reports</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                            <i class="fas fa-cog mr-3"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Main content -->
        <div class="flex-1 overflow-auto">
            <!-- Top navigation -->
            <header class="bg-white shadow-sm p-4 flex justify-between items-center">
                <h2 class="text-lg font-semibold text-gray-800">Dashboard Overview</h2>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        <input type="text" placeholder="Search..." class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-300">
                    </div>
                    <div class="relative">
                        <button class="p-2 text-gray-500 hover:text-gray-700">
                            <i class="fas fa-bell"></i>
                            <span class="absolute top-0 right-0 h-2 w-2 rounded-full bg-red-500"></span>
                        </button>
                    </div>
                    <div class="flex items-center">
                        <img src="../<?= $_SESSION['photo'] ?>" alt="User" class="w-8 h-8 rounded-full">
                        <span class="ml-2 text-sm font-medium hidden sm:inline"><?= $_SESSION['username'] ?></span>
                    </div>
                </div>
            </header>

            <!-- Main dashboard content -->