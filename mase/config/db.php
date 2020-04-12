<?php 

$config = mysqli_connect('localhost','root', 'root@admin', 'sportconnect' );

if(mysqli_connect_errno()) {
    echo "Failed to connect to Mysqli" . mysqli_connect_errno();
}

if($config) {
    // echo "connected";
}

