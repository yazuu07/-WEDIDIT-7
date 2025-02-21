<?php
session_start();

// Restrict access to only admins
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(to right, rgb(144, 105, 6), rgb(0, 0, 0)); /* Gradient background */
            padding: 1.5rem;
            height: 100vh;
        }
        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 10;
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Navigation Bar -->
    <nav class="bg-stone-900 text-white shadow-lg">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold">Admin Dashboard</div>
            <ul class="flex gap-4">
                <li><a href="/itonatocuescano/Admin_dashboard.php" class="hover:text-yellow-400 transition duration-300">Home</a></li>
                <li><a href="/itonatocuescano/about/Company_goal.php" class="hover:text-yellow-400 transition duration-300">Goal</a></li>
                <li><a href="/itonatocuescano/about/Company_vision.php" class="hover:text-yellow-400 transition duration-300">Vision</a></li>
                <li><a href="/itonatocuescano/about/Company_mission.php" class="hover:text-yellow-400 transition duration-300">Mission</a></li>
                <li><a href="/itonatocuescano/logout.php" class="hover:text-yellow-400 transition duration-300">Logout</a></li>
            </ul>
        </div>
    </nav>

      
        <!-- Main Content -->
        <main class="flex-1 p-8">
            <div class="max-w-4xl mx-auto text-center bg-white text-gray-900 p-10 rounded-lg shadow-lg">
                <h1 class="text-4xl font-bold text-stone-900 mb-6">Our Mission</h1>
                <p class="text-lg leading-relaxed">
                    "Our mission at <span class="font-semibold"><a class="transition duration-300 ease-in-out hover:bg-yellow-800 text-xl rounded" href="https://www.facebook.com/systechintegration">Systech Integration & Security Solutions, Inc.</a></span> is to inspire and empower individuals and businesses by 
                    delivering <span class="text-yellow-600 font-semibold">exceptional solutions</span> that drive innovation, efficiency, and sustainability. 
                    We are committed to <span class="text-yellow-600 font-semibold">excellence</span>, fostering a culture of creativity, and maintaining the 
                    highest standards of <span class="text-yellow-600 font-semibold">integrity</span>. Through collaboration and 
                    <span class="text-yellow-600 font-semibold">cutting-edge technology</span>, we aim to make a lasting impact, ensuring a brighter future for generations to come."
                </p>
            </div>
        </main>
    </div>
</body>
</html>
