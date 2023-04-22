<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>register</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body onload="displayRoutes()">
<!--nav-->
<nav class="flex gap-2 bg-white opacity-90 justify-between p-4 w-full h-16 sticky top-0 z-30 shadow-xl">
    <!--        Logo-->
    <h3 class="w-2/12 h-full flex items-center text-3xl text-green-800 font-mono py-2">
        Natural
    </h3>
    <!--        actual navigation-->
    <div class="flex gap-2 justify-between pt-1 px-8 bg-[#396F01] text-white text-center font-semibold w-9/12" id="navButtons">
        <!--     nav links are displayed here  -->
    </div>
</nav>
<!--nav-->

<div class="flex flex-col gap-2">
    <div class="grid grid-cols-2 mt-16">
        <div class="text-5xl font-bold flex justify-center items-center ">
            <h1>Register User</h1>
        </div>
        <form class="flex flex-col gap-6" method="post">

            <div class="flex flex-col gap-2">
                <label for="email"> Email </label>
                <input type="text" name="email" id="email" required class="border rounded w-11/12 md:w-8/12 py-1 px-2">
            </div>
            <div class="flex flex-col gap-2">
                <label for="password"> Password </label>
                <input type="password" name="password" id="password" required class="border rounded w-11/12 md:w-8/12 py-1 px-2">
            </div>
            <div class="flex flex-col gap-2">
                <label for="confirm_password"> Confirm Password </label>
                <input type="password" name="confirm_password" id="confirm_password" required class="border rounded w-11/12 md:w-8/12 py-1 px-2">
            </div>

            <div class="flex gap-2 items-center wrap">
                <button name="upload" type="submit"
                        class="bg-blue-400 cursor-pointer text-white hover:bg-blue-500 rounded w-fit px-4 py-2">
                    Complete Registration
                </button>

                <a href="login.php">
                    <button name="login" type="button"
                        
                        class="bg-blue-100 cursor-pointer hover:bg-blue-200 rounded w-fit px-4 py-2">
                    Already have an account ? Login
                </button>

                </a>

            </div>
        </form>
<?php
// $host = "localhost"; 
// $usename = "root"; 
// $password = " ";
// $dbname = "natural-food";

// Create a connection
//$conn = mysqli_connect($host, $username, $password, $dbname);
// $conn = mysqli_connect($host, $username, $password, $dbname);
$conn = mysqli_connect("localhost", "root", "", "natural-food");



// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Check if the form has been submitted
if (isset($_POST['upload'])) {
    // Create database connection
    
    //Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    // Retrieve form data
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];


    if($password != $confirm_password){
        echo "password do not match";
    } 
    else {

    $sql = "INSERT INTO register(email, password) VALUES ('$email', '$password')";
        if (mysqli_query($conn, $sql)) {
            // Registration successful
            $success = "Registration successful!";
            header("location:http://localhost/naturalfood/");
        } else {
            // Registration failed
            $error = "Registration failed. Please try again later.";
        }
    }
}
    

?>



    </div>
</div>



<!--script-->
<script src="../assets/javascript/navigation.js"></script>
</body>
</html>