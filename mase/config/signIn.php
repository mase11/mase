<?php session_start();
include('db.php');

$email = '';
$password = '';

// Error variables 
$emailError = '';
$passwordError = '';
$noValid = '';


if(isset($_POST['login_btn'])) {
    userLogin();
}

function userLogin() {
    global $config, $email, $email, $emailError, $noValid , $passwordError;

    $email = $_POST['email'];
    $password = $_POST['password'];


    // echo $email . " " . $password;

    if(empty($email)) {
        $emailError = "Email is required ";
    }
    if(empty($password)) {
        $passwordError = "Password is required";
    }

    // echo $emailError . " " . $passwordError;

    if(!$emailError && !$passwordError) {
        $password = md5($password);

        $queryDB = "SELECT * FROM users WHERE email='$email' AND password='$password'";

        $output = mysqli_query($config, $queryDB);

        if(mysqli_num_rows($output) == 1) {

            $userProfile = mysqli_fetch_assoc($output);

            if($userProfile) {
                $_SESSION['email'] = $userProfile['email'];
                $_SESSION['success'] = 'You are now logged in';
            }

            header('Location: ./admin/index.php');
        }else{
            $noValid = 'Wrong email or password';
        }

        if(!$output) {
            echo "Heloo wrong query";
        }

    }
}