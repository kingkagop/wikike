<?php
    include "logic.php"
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>Home</title>
    <link href="main.css" rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <style>

    </style>
</head>
<body class="body">
    <main class="main">
        <div>
            <div>
                <form method="POST">
                    <label for="firstName">First Name:</label>
                    <input type="text" name="firstName"><br>
                    <label for="secondName">Second Name:</label>
                    <input type="text" name="secondName"><br>
                    <label for="username">Username:</label>
                    <input type="text" name="username"><br>
                    <label for="username">Username:</label>
                    <input type="text" name="username"><br>
                    <label for="password">Password:</label>
                    <input type="text" name="password"><br>
                    <input type="submit" name="signup"value="SIGNUP">
                </form>
                <p><a href="forgot_password">Already have an account?</p>
                <button><a href="login.php">LOGIN</a></button>
            </div>
        </div>
    </main>
    
    <footer class="footer">
        <div class="footer-bottom">
            <p>Copyright</>
            <p>
                <a href="#" target="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
                    </svg>
                </a>
            </p>
        </div>
    </footer>
</body>

</html>