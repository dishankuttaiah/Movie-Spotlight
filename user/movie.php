<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../guest/index.php');
}
else{ 
    if ($_SESSION['status'] == "admin") {
        header('location: ../admin/index.php');
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
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'>


    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-secondary navbar-dark fixed-top ">

        <a class="navbar-brand" href="index.php">
             MovieSpotlight
        </a>


        <ul class="navbar-nav mr-auto">

        </ul>

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="browse.php">Browse Movies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="request.php">Request</a>
            </li>
            
            <li class="nav-item dropdown dropleft">
                <a class="nav-link" href="#" data-toggle="dropdown">
                    <img src="../image/default-user.png" style="width:30px; border-radius:50%;" alt="logo ">
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item disabled" style="color:silver; text-transform:lowercase;" href="#"><?php echo $_SESSION['username'] ?></a>
                    <a class="dropdown-item" style="color:#fff;" href="../controller/logout.php">Log Out</a>
                </div>
            </li>
        </ul>
    </nav>


    <div class="container">
        <div id="movie"></div>
    </div>
    <div class="container">
        <div class="container main-review">
            <h1 class="title-second review-text">Movie Review</h1>
            <div id="reviews">
            <form action="../controller/reviews.php" method="post">
                <div class="row">
                    <div class="col-md-6 box1">
                        <h3 style="margin-bottom:50px;"><span style="font-weight:bold; color: #6AC045"></span></h3>
                       
                        <label for="review">Review:</label><br>
                        <textarea name="msg" cols="30" rows="5" class="input"></textarea>
                        <input type="submit" class="btn" value="Send Request">
                    </div>
                    
                </div>   
            </form>
        
  	</div>
</div>
</div>
<?php

?>

    	<div class="mt-5" id="review_content"></div>
            </div>
        </div>
    </div>

   


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

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