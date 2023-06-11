<?php 
session_start();

require_once('../db_connect.php');



$service_icon = $_POST['service_icon'];
$service_header = $_POST['service_header'];
$service_description = $_POST['service_description'];
$status = $_POST['status'];


// print_r($_POST);



if ($service_icon && $service_header && $service_description && $status) {
    $service_insert_query = "INSERT INTO services(service_icon, service_header, service_description, status) VALUES('$service_icon','$service_header','$service_description','$status')";
    $service_insert_final = mysqli_query($db_connect, $service_insert_query);
    
    $_SESSION['add_srvice_succes'] = 'Your service added succesfully';
    header('location: add_service.php');
} else {
    $_SESSION['service_all_field_error'] = 'All fields are required';
    header('location: add_service.php');
}
?>