<?php
session_start();


// user_data vars
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
// pregma
$preg_maa = preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $password);
// flag
$flag = false;
// universal database connection
require_once("../db_connect.php");


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

// confirm password, password match, preg-match validation
if ($confirm_password) {
    $_SESSION['old_confirm_password'] = $confirm_password;

    if ($password == $confirm_password) {
        if ($preg_maa == 0) {                   // similer to else
            $_SESSION['preg_ma_error'] = "Password must be 8 characters long with uppercase, lowercase, number, and special character.";
            $flag = true;
        }
    } else {
        $_SESSION['password_match_error'] = "Password doesn't match";
        $flag = true;
    }
} else {
    $_SESSION['confirm_password-error'] = "Please provide a confirm Password";
    $flag = true;
}
// email duplicate check (vars)
$email_dup_check = "SELECT COUNT(*) AS 'dup_email_check' FROM users WHERE email='$email'";
$email_dup_check_query_final = mysqli_query($db_connect, $email_dup_check);
$email_dup_check_query_OtA = mysqli_fetch_assoc($email_dup_check_query_final)["dup_email_check"];

if ($email_dup_check_query_OtA == 1) {
    $_SESSION['dup_email_error'] = 'This e-mail already exists';
    $flag = true;
}



// redirect by flag, database connection
if ($flag == 1) {
    header("location: sign_up.php");
} else {
    // password encripting variable
    $encrypted_pass = md5($password);

    // data insert into database
    $insert_query = "INSERT INTO users(name,email,password) VALUES('$name','$email','$encrypted_pass')";
    $insert_query_final = mysqli_query($db_connect, $insert_query);

    // success message in log-in page
    $_SESSION['sign_in_success_msg'] = $name . "! Your account created successfully.";

    // redirect to log-in page
    header("location: log_in.php");
}
?>