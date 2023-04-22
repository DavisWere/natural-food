<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blogs</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>

</style>
<body onload="displayRoutes()">
<!--nav-->
<nav class="flex gap-2 bg-white opacity-90 justify-between p-4 w-full h-16 sticky top-0 z-30 shadow-xl">
    <!--        Logo-->
    <h3 class="w-2/12 h-full flex items-center text-3xl text-green-800 font-mono py-2">
        Natural
    </h3>
    <!--        actual navigation-->
    <div class="flex gap-2 justify-between pt-1 px-8 bg-[#396F01] text-white text-center font-semibold w-9/12"
         id="navButtons">
        <!-- nav links are displayed here-->
    </div>
</nav>
<!--nav-->

<!--script-->
<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "natural-food";

// Connect to database
$db = mysqli_connect($servername, $username, $password, $dbname);

// Query to retrieve image filenames from database
$result = mysqli_query($db, "SELECT * FROM images");

?>

<!-- HTML code to display images -->
<div class="h-24 text-3xl font-bold flex flex-col items-center justify-center w-full">
    <span class="border-b-8 border-green-400">BLogs</span>
</div>
<div class=" rounded-lg w-9/12 mx-auto grid grid-cols-3 gap-4" id="content">

    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<div id='img_div' class='flex flex-col gap-x-1 gap-y-0 p-0  w-11/12 rounded border h-fit'>";
        echo "<img class='h-44 rounded-lg p-1' src='images/".$row['image']." ' >";
        echo "<hr class='font-bold'/>";
        echo "<p class='font-mono text-grary-500'> ".$row['date']."</p> </br>";
        echo "<p class='text-2xl font-semibold capitalize'>".$row['title']."</p> </br>";
        echo "<p class='w-full bg-gray-50 p-2 border rounded'> ".$row['content']."</p>";

        echo "</div>";
    }
    ?>
</div>




<script src="../assets/javascript/navigation.js"></script>
</body>
</html>