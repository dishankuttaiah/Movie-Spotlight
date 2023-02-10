<?php

   session_start();

   header('location: ../user/request.php#success');
   
   include('connectdb.php');

 
    $title = $_POST['title'];
    $message = $_POST['msg'];
    $user = $_SESSION['username'];
 
    $sql = "INSERT INTO request (RequestUser,RequestTitle,RequestMessage) values('$user','$title','$message')";

    $result = $conn -> query($sql);

    $conn->close();
?>