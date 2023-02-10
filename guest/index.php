
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
    <title>Welcome to MovieSpotlight</title>
    <link rel="stylesheet" href="../css/index.css">
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'>

  
    <link rel=" stylesheet " href="../css/bootstrap.min.css ">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/popup.css">

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
                <a class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="browse.php">Browse Movies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#popup1">Log In</a>
            </li>
        </ul>
    </nav>

  
    <div id="popup1" class="popup-overlay">
        <div class="log-popup">
            <h2>Log In</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
                <form action="../controller/login.php" method="post">
                    
                    <input type="text" placeholder="Username" name="username" class="log-input" required>
                    <br>
                    
                    <input type="password" placeholder="Password" name="password" class="log-input" required>
                    <br>
                    <input type="submit" value="Log In" name="signup-btn" class="btn-log">
                </form>
            </div>
        </div>
    </div>

    <div id="popup2" class="popup-overlay">
        <div class="log-popup">
            <h2>Sign Up</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
                <form action="../controller/register.php" method="post">
                    
                    <input type="text" placeholder="Enter your name" name="fullname" class="log-input" required>
                    <br>
                    
                    <input type="email" placeholder="Enter your email" name="email" class="log-input" required>
                    <br>
                    
                    <input type="text" placeholder="Enter username" name="username" class="log-input" required>
                    <br>
                    
                    <input type="password" placeholder="Password" name="password" class="log-input" required>
                    <br>
                    <input type="checkbox" name="chkbox" required> I agree to Terms and Conditions
                    <br>
                    <input type="submit" value="Sign Up" name="signup-btn" class="btn-log">
                </form>
            </div>
        </div>
    </div>
    <div id="success" class="popup-overlay">
        <div class="log-popup">
            <h2>Success</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
                <p>Account is created Successfully.Now you can login your account :)</p>
                <a href="#popup1" class="btn-main btn-main-primary">
                        Log In
                </a>
            </div>
        </div>
    </div>
    <div id="error" class="popup-overlay">
        <div class="log-popup">
            <h2>Error</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
                <p>Username or Email already exist :( Try Again...</p>
            </div>
        </div>
    </div>
    <div id="error1" class="popup-overlay">
        <div class="log-popup">
            <h2>Error</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
                <p>No Account Found :( Try Again...</p>
            </div>
        </div>
    </div>




    <header>
        <div class="container body ">
            <center>
                <div class="inner-body ">
                    <h1 class="title ">Welcome to
                        <span style="color: #6AC045 ">MovieSpotlight</span>
                    </h1>
                    <p style="color: " class="content">
                        Welcome to
                        <span style="font-weight:bold; color: #6AC045">MovieSpotlight</span> | It is site where you can view information about your favourite movie. MoviesSpotlight
                        are best known for the excellent
                        <span style="font-weight:bold; color: #6AC045">Information</span> for each and every released and not released movies. We are providing this information
                        
                        <span style="font-weight:bold; color: #6AC045">Browse</span> Movie and get detail aspect of your favourite movie.
                    </p>
                </div>
                <div class="container">
                    <a href="#popup1" class="btn-main btn-main-primary">
                        Log In
                    </a>
                    <a href="#popup2" class="btn-main">
                        Sign Up
                    </a>
                </div>

            </center>
        </div>
    </header>

    <div class="about-box ">
        <center>
        <div class="about ">
                <h1>About this site</h1>
                <p class="about-content ">We are students of Vit made this Website for an dbms project .</p>
            </div>
        </center>
    </div>

   <div id="demo" class="carousel slide container" data-ride="carousel">
        <div class="ratedMoviesHead">
            <h1>Top Rated Movies</h1>
        </div>

        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>
        </ul>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div id="topMovies1" class="row"></div>
            </div>
            <div class="carousel-item">
                <div id="topMovies2" class="row"></div>
            </div>
            <div class="carousel-item">
                <div id="topMovies3" class="row"></div>
            </div>
            <div class="carousel-item">
                <div id="topMovies4" class="row"></div>
            </div>
            <div class="carousel-item">
                <div id="topMovies5" class="row"></div>
            </div>
        </div>

 
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
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
        getTopMovies();
    </script>
</body>

</html>