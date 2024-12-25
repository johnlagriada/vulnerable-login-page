<?php
session_start();

if (isset($_SESSION['username'])) {
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            body {
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
                background-color: #f0f0f0;
            }
            .welcome-container {
                width: 400px;
                padding: 20px;
                background-color: #fff;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="welcome-container">
            <h1>Welcome, ' . $_SESSION['username'] . '!</h1>
            <p>You are now logged in.</p>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
    </body>
    </html>';
} else {
    header("Location: login.php");
    exit();
}
?>