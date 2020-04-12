<?php session_start();
    include('db.php');

$name = "";
$email = "";
$errors = array();

$nameError = '';
$emailError = '';
$passwordError = '';
$confirmPasswordError = '';

if( isset($_POST['signUp'])) {
    registerUser();
}


function registerUser() {
    global $config, $errors, $name, $email;

    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $cfPassword = $_POST['confirmPassword'];

    $errors =  validateFields($name, $email, $gender, $password, $cfPassword);

    // validate errors to login 
    if($errors === null) {

        if($email === checkUserExist($email)) {
            $userExistError ="Email already exist!";
        }       

        $password = md5($password);

        $queryDB = "INSERT INTO users(name, gender, email, password) VALUES ('$name', '$gender', '$email', '$password')";
        
        if(mysqli_query($config, $queryDB)){
            $_SESSION['name'] = $name;
            $_SESSION['success'] = "You are now logged in";

            header('Location: ./admin/index.php');
        }

        // echo "This query not validated";
        
    }

}

function validateFields($name, $email, $gender, $password, $confirmpassword) {

    global $nameError, $emailError, $passwordError, $confirmPasswordError;

    $errors = array();

    if (empty($name)) { 
		$nameError = "name is required"; 
	}
	if (empty($email)) { 
		$emailError = "Email is required"; 
	}
	if (empty($password)) { 
		$passwordError = "Password is required"; 
	}
	if ($password != $confirmpassword) {
		$confirmPasswordError = "The confirm passwords do not match";
    }
    
    return $errors ? $nameError || $emailError || $passwordError || $confirmPasswordError : null;
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	

function checkUserExist($email) {
    global $config;
    $user = '';

    $queryDb = "SELECT * FROM users WHERE email= $email";
    $result = mysqli_query($config, $queryDb);


    $result ? $user = mysqli_fetch_assoc($result) : $user = null;

    if(!$user) {
        return;
    }
    return $user['email'];
}

?>