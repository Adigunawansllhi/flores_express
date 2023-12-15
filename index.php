<?php
$path = "vendor/almasaeed2010/adminlte/";

// require_once 'app/Login.php';
require "vendor/autoload.php";

$log = new App\Login;
$rows = $log->cekLogin("username" , "password");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = new App\Login();
    $login->cekLogin($username, $password);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="shortcut icon" href="vendor/almasaeed2010/adminlte/dist/img/logo.png" type="image/x-icon">

    <style>
        /* Center the card on the page */
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            width: 400px;
            padding: 30px;
            border-radius : 10px;
        }

        .card img {
            width: 40%; /* Adjust the width as needed */
            margin: auto;
            display: block;
        }
    </style>
</head>
<body>
    <div class="card bg-navy ">
        <img src="vendor/almasaeed2010/adminlte/dist/img/logo.png" alt="Logo" class="img-fluid circle mb-3 h-100">
        <h3 class="text-center">Floress Express</h3>
        <h5 class="text-center mb-5">Silahkan Login</h5>
        <form action="" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn text-white btn-block" style="background-color: #001F3F;">Login</button>
        </form>
    </div>  

    <!-- Add Bootstrap JS and Popper.js links -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
