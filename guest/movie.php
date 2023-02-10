<?php
session_start();
if (isset($_SESSION['username'])) {
    if ($_SESSION['status'] == "admin") {
        header('location: ../admin/index.php');
    } else {
        header('location: ../user/index.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Information</title>

    <link rel="stylesheet" href="../css/movie.css">


    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/popup.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-secondary navbar-dark fixed-top ">

        <a class="navbar-brand" href="../index.php">
             MovieSpotlight
        </a>


        <ul class="navbar-nav mr-auto">

        </ul>

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="browse.php">Browse Movies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../index.php#popup1">Log In</a>
            </li>
        </ul>
    </nav>


    <div class="container">
        <div id="movie"></div>
    </div>
    <div class="container">
        <div class="container main-review">
            <h1 class="title-second review-text">Movie Review</h1>
            <div id="reviews"></div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; Copyright Developed by MovieSpotlight.</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="../js/main.js"></script>
    <script>
        getMovie();
        getReviews();
    </script>
</body>

</html>