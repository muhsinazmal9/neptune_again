<?php 

// user_data vars
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
// pregma
$preg_maa = preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $password);
// flag
$flag = false;


// name input validation
if ($name) {
    // $_SESSION['session name'] = 'session message';
    $_SESSION['old_name'] = $name;
} else {
    $_SESSION['name-error'] = "Please provide a name";
    $flag = true;
}

// email input validation
if ($email) {
    $_SESSION['old_email'] = $email;
} else {
    $_SESSION['email-error'] = "Please provide an email";
    $flag = true;
}

// password input validation
if ($password) {
    $_SESSION['old_password'] = $password;
} else {
    $_SESSION['password-error'] = "Please provide a password";
    $flag = true;
}

// confirm password input validation
if ($confirm_password) {
    $_SESSION['old_confirm_password'] = $confirm_password;
} else {
    $_SESSION['confirm_password-error'] = "Please provide a confirm Password";
    $flag = true;
}

if ($flag == 1) {
    header("location: sign_up.php");
} else {
    header("location: log_in.php");
}




/*
    preg match message:
    Password must be 8 characters long with uppercase, lowercase, number, and special character.
*/


?>
