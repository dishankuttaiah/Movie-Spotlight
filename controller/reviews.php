<?php

   session_start();

   header('location: ../user/movie.php#success');
   
   include('connectdb.php');


    $review = $_POST['review'];
    $user = $_SESSION['username'];
    $mid = $_SESSION['id'];

    $sql = "INSERT INTO review (movie_id,username,user_review) values('$mid',$user','$review')";

    $result = $conn -> query($sql);

  
    $conn->close();
?>
