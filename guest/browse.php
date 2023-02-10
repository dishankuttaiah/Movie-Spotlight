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
    <title>Browse your Faourite Movies</title>
 
    <link rel="stylesheet" href="../css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'>

   
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
                <a class="nav-link active" href="#">Browse Movies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../index.php#popup1">Log In</a>
            </li>
        </ul>
    </nav>


    <div class="container-fluid body">
        <div class="container">
            <div class="sbox">

                <div>
                    <center>
                    <div class="content">
                            <h1 style="color: black">MovieSpotlight: Information about movies</h1>
                            <p style="color: black">
                                Welcome to
                                <span style="font-weight:bold; color: #6AC045">MovieSpotlight</span> | It is site where you can view information about your favourite movie.
                                MoviesSpotlight are best known for the excellent
                                <span style="font-weight:bold; color: #6AC045">Information</span> for each and every released and not released movies. We are providing
                                
                                <span style="font-weight:bold; color: #6AC045">Browse</span> Movie and get detail aspect of your favourite movie.
                            </p>
                        </div>
                    </center>
                    <form id="searchForm">
                        <input type="text" class="searchBox" placeholder="Search Movies here" id="searchText">
                    </form>
                </div>
            </div>
        </div>

        <div class="container">
            <div id="movies" class="row"></div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; Copyright Developed by MovieSpotlight.</p>
    </div>

  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="../js/main.js"></script>
    <script>
        popularMovies();
    </script>
</body>

</html>