<?php
session_start();
require_once('components/html_syn-head.php');
?>

<div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">
    <div class="app-auth-background">

    </div>
    <div class="app-auth-container">
        <div class="logo">
            <a href="#">Neptune</a>
        </div>
        <p class="auth-description">Please sign-in to your account and continue to the dashboard.<br>Don't have an
            account? <a href="sign_up.php">Sign Up</a></p>

        <form action="log_in_post.php" method="post">
            <div class="auth-credentials m-b-xxl">
                <label for="signInEmail" class="form-label">Email address</label>
                <input type="email" class="form-control m-b-md" id="signInEmail" aria-describedby="signInEmail"
                    placeholder="example@neptune.com" name="email" value="<?php
                    if (isset($_SESSION['old_email'])) {
                        echo $_SESSION['old_email'];
                    }
                    ?>">

                <?php if (isset($_SESSION['email_missing'])): ?>
                    <div class="alert alert-danger">
                        <?= $_SESSION['email_missing']; ?>
                    </div>
                <?php endif; ?>

                <label for="signInPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="signInPassword" aria-describedby="signInPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" name="password">

                <?php if (isset($_SESSION['pass_missing'])): ?>
                    <div class="alert alert-danger mt-4">
                        <?= $_SESSION['pass_missing']; ?>
                    </div>
                <?php endif; ?>

                <?php if (isset($_SESSION['check_mail_pass_error'])): ?>
                    <div class="alert alert-danger mt-4">
                        <?= $_SESSION['check_mail_pass_error']; ?>
                    </div>
                <?php endif; ?>

            </div>
            <div class="auth-submit">
                <button type="submit" class="btn btn-primary">Sign In</button>
            </div>
        </form>
        <div class="divider"></div>
    </div>
</div>


<?php 

require_once('components/footer.php');
session_unset(); 

?>