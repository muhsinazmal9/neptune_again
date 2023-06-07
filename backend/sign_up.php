<?php
session_start();
require_once('components/html_syn-head.php');
?>

<div class="app app-auth-sign-up align-content-stretch d-flex flex-wrap justify-content-end">
    <div class="app-auth-background">

    </div>
    <div class="app-auth-container">
        <div class="logo">
            <a href="#">Neptune</a>
        </div>
        <p class="auth-description">Please enter your credentials to create an account.<br>Already have an account? <a
                href="log_in.php">Sign In</a></p>

        <?php require_once('components/validated_form_sign_up.php'); ?>

        <div class="divider"></div>
    </div>
</div>

<?php require_once('components/scr-bodyEnd-htmlEnd.php'); ?>

<?php session_unset(); ?>