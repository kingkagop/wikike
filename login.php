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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <style>

    </style>
</head>
<body class="container">
    <div class="container-fluid pt-3">
        <header class="column">
            <div class="row bg-info pt-3 rounded">
                <div class="col">
                <a class="text-decoration-none text-end pt-1" href="donate.php"><button class="btn btn-outline-primary float-right" type="button">DONATE</button></a>
                </div>
                <div class="col">
                    <a class="text-decoration-none text-center" href="index.php">WikiKE</a>
                </div>
                <div class="col row">
                    <form class="d-flex">
                        <input class="form-control me-2" type="text" placeholder="Search">
                        <button class="btn btn-primary" type="button">Search</button>
                    </form>
                    
                    <a class="text-decoration-none text-end pt-1" href="signup.php"><button class="btn btn-primary float-right" type="button">Sign up</button></a>
                    
                </div>
            </div>
        </header>
        <hr>
        <div class="container-fluid bg-info rounded">
            <ul class="nav text-decoration-none">
                <a class="nav-link" href="#">People</a>
                <a class="nav-link" href="#">Government</a>
                <a class="nav-link" href="#">Technology</a>
                <a class="nav-link" href="#">Art</a>
                <a class="nav-link" href="#">Culture</a>
                <a class="nav-link" href="#">Business</a>
                <a class="nav-link" href="#">Politics</a>
                <a class="nav-link" href="#">Opinion</a>
                <a class="nav-link" href="#">Science</a>
                <a class="nav-link" href="#">Health</a>
                <a class="nav-link" href="#">Style</a>
                <a class="nav-link" href="#">Travel</a>
                <a class="nav-link" href="#">Sports</a>
            </nav>
        </div>
        <hr>
    </div>
    <div class="column pt-1 d.grid">
        <button class="btn btn-primary btn-block "><a href="create.php" class="text-decoration-none text-dark text-uppercase">Create Post</a></button>
    </div>
    <main class="column pt-3 row bg-info rounded">
        <section class="col-sm-8">
            <div class="container-sm pt-5 ">
                <form method="POST" class="">
                    <div class="mb-3 mt-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" name="username" class="form-control"><br>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="text" name="password" class="form-control"><br>
                    </div>
                    <div class="d-grid">
                        <input type="submit" name="login" value="LOGIN" class="btn btn-primary btn-block">
                    </div>
                    

                </form>
                <div class="">
                    <p class=""><a href="forgot_password">Forgot password?</a></p>
                    <p class=""><a href="forgot_password">Don't have an account yet?</a></p>
                </div>
                <div class="">
                    <button class="btn btn-outline-primary"><a href="signup.php" class="text-decoration-none text-dark">SIGNUP</a></button>
                </div>
            </div>
        </section>
    </main>

    <footer class="container-fluid">
        <div class="container pt-5">
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
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>