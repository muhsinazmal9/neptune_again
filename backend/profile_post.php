<?php
session_start();

require_once('../db_connect.php');


// vars
$s_id = $_SESSION['select_id'];
$s_name = $_SESSION['select_name'];







// name change part start
if (isset($_POST['name_cng_btn'])) {
    $name_cng_inp = $_POST['name_cng'];
    $name_cng_update_q = "UPDATE users SET name = '$name_cng_inp' WHERE id = '$s_id'";
    mysqli_query($db_connect, $name_cng_update_q);
    $_SESSION['select_name'] = $name_cng_inp;
    header('location: profile.php');
}
// name change part end





// profile photo change part start
if (isset($_POST['pp_cng_btn'])) {
    // vars
    $finfo = $_FILES['pp_cng'];
    $name = $finfo['name'];
    $tmp_name = $finfo['tmp_name'];
    $size = $finfo['size'];

    $after_expo = explode('.', $name);
    $img_extension = end($after_expo);
    $new_name = $s_id . '.' . $img_extension;

    $old_location = $tmp_name;
    $new_location = 'uploads/dp/' . $new_name;

    move_uploaded_file($old_location, $new_location);

    $dp_update_query = "UPDATE users SET profile_photo = '$new_name' WHERE id = '$s_id'";
    $dp_update_query_final = mysqli_query($db_connect, $dp_update_query);

    header('location: profile.php');
}
// profile photo change part end






// password change part start

if (isset($_POST['pass_cng_btn'])) {
    // variables : -
    $crn_pass = $_POST['current_password'];
    $n_pass = $_POST['new_password'];
    $c_n_pass = $_POST['confirm_password'];
    // pregma
    $preg_maa = preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $n_pass);

    $flag = false;

    if (!$crn_pass) {
        $_SESSION['crn_pass_error'] = 'Please provide your Password';
        $flag = true;
    }
    if (!$n_pass) {
        $_SESSION['n_pass_error'] = 'Please provide your new Password';
        $flag = true;
    }
    if ($c_n_pass) {
        $enc_pass = md5($crn_pass);
        $pass_count_query = "SELECT COUNT(*) AS 'Password Check' FROM users WHERE password = '$enc_pass' AND id = '$s_id'";
        $pass_count_query_final = mysqli_query($db_connect, $pass_count_query);
        $pass_count_query_assoc = mysqli_fetch_assoc($pass_count_query_final)['Password Check'];

        if ($pass_count_query_assoc == 1) {
            if ($n_pass == $c_n_pass) {
                if ($preg_maa == 1) {
                    $_SESSION['cng_success'] = 'Your Password Changed Succesfully';
                    header('location: profile.php');
                } else {
                    $flag = true;
                    $_SESSION['n_pass_preg_ma'] = 'Password must be 8 characters long with uppercase, lowercase, number, and special character.';
                }
            } else {
                $flag = true;
                $_SESSION['pass_matching_error'] = 'Password and Confirm Password not matched';
            }
        } else {
            $flag = true;
            $_SESSION['pass_miss_match_error'] = 'Your Password is not corerct';
        }

        if ($flag == 1) {
            header('location: profile.php');
        } else {
            $enc_n_pass = md5($n_pass);
            $update_pass_query = "UPDATE users SET password = '$enc_n_pass' WHERE id = '$s_id'";
            $update_pass_final = mysqli_query($db_connect, $update_pass_query);
            header('location: profile.php');
        }
    } else {
        $_SESSION['c_n_pass_error'] = 'Please provide your confirm new Password';
        header('location: profile.php');
    }

}
// password change part end
?>