<?php

    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */

    // Defined as constants so that they can't be changed
    DEFINE ('DB_USER', 'root');
    DEFINE ('DB_PASSWORD', '');
    DEFINE ('DB_HOST', 'localhost');
    DEFINE ('DB_NAME', 'test1');
    // $dbc will contain a resource link to the database
    // @ keeps the error from showing in the browser
    $link = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
    OR die('Could not connect to MySQL: ' .
    mysqli_connect_error());
    echo "Connection Successful ";

    // Check connection

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }


    $name = mysqli_real_escape_string($link, $_POST['name']);  //name
    $IGN = mysqli_real_escape_string($link, $_POST['ign']); //for email
    $games = mysqli_real_escape_string($link, $_POST['games']); //for email
    $rank = mysqli_real_escape_string($link, $_POST['rank']); //for box needs to be sleeves type
    $comments = mysqli_real_escape_string($link, $_POST['box']); //for box needs to be sleeves type


    // attempt insert query execution
    $sql = "INSERT INTO joinus (name, ign, game, rank, about) VALUES ('$name', '$IGN', '$games', '$rank', '$comments')";


    if(mysqli_query($link, $sql)){
        echo "Join added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // close connection
    mysqli_close($link);
?>