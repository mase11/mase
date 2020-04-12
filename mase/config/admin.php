<?php session_start();

    include('db.php');

    $email = $_SESSION['email'];

    $queryDB = "SELECT * FROM users WHERE email='$email'";
    $result = $config->query($queryDB);
    $profilDetail = mysqli_fetch_assoc($result); 

    $username = $profilDetail['username'];


    // $queryDBGames = "SELECT * FROM game WHERE username ='$username'";

    $queryDBGames = "SELECT * FROM game";
    $gamesResult = $config->query($queryDBGames);

    // $gamesList = mysqli_fetch_assoc($gamesResult);

    // if($gamesResult) {
    //     while($gamesList = $gamesResult->fetch_assoc()){
    //         $username = $gamesList['username'];
    //         $
    //     };

    //     $gamesResult->free();
    // }
    
    // print_r($profilDetail['email']);

    
    // select all users which are not admin
    // Games 
    /** 
     * Username
     * level
     * wins
     * connect status
     * 
     * 
     * Total games
     * wins
     * loses
     * number of connection
     */


