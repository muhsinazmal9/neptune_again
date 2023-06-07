<?php
session_start();

// user_data vars
$email = $_POST['email'];
$password = $_POST['password'];
// flag
$flag = false;
// universal database connection
$db_connect = mysqli_connect('localhost', 'root', '', 'neptune_again');

if ($email) {
    $_SESSION['old_email'] = $email;
} else {
    $_SESSION['email_missing'] = "Please provide your e-mail";
    $flag = true;
}

if ($password) {
    // $_SESSION['old_password'] = $password;

    // encrypted pass for detect
    $encrypted_pass = md5($password);
    // check info
    $select_count_query = "SELECT COUNT(*) AS 'Log in Check Query' FROM users WHERE email='$email' AND password='$encrypted_pass'";
    $result = mysqli_query($db_connect, $select_count_query);
    $result_f_a = mysqli_fetch_assoc($result)['Log in Check Query'];

    if ($result_f_a != 1) {
        $_SESSION['check_mail_pass_error'] = 'Provide correct information. try again';
        $flag = true;
    }

} else {
    $_SESSION['pass_missing'] = 'Please provide your Password';
    $flag = true;
}


if ($flag == 1) {
    header('location: log_in.php');
} else {
    // select query
    $select_id_name = "SELECT id, name FROM users WHERE email = '$email'";
    // query implement and fetch assoc
    $select_id_name_Q = mysqli_query($db_connect , $select_id_name);
    $select_id_name_Q_f_a = mysqli_fetch_assoc($select_id_name_Q);
    // info vars
    $s_id = $select_id_name_Q_f_a['id'];
    $s_name = $select_id_name_Q_f_a['name'];
    // sessions (which converts post to queried)
    $_SESSION['select_email'] = $email;
    $_SESSION['select_id'] = $s_id;
    $_SESSION['select_name'] = $s_name;
    // redirect to dashboard
    header('location: dashboard.php');
}

?>