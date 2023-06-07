<form action="sign_up_post.php" method="post">
    <div class="auth-credentials m-b-xxl">
        <label for="signUpUsername" class="form-label">Name</label>
        <input type="text" class="form-control m-b-md" id="signUpUsername" aria-describedby="signUpUsername" placeholder="Enter Name" name="name" 
        value="<?php
        if (isset($_SESSION['old_name'])) {
            echo $_SESSION['old_name'];
        }?>">
        
        <!-- name validation -->
        <?php if(isset($_SESSION['name-error'])):?>
        <div class="alert alert-danger">
            <?=$_SESSION['name-error']?>
        </div>
        <?php endif;?>

        <label for="signUpEmail" class="form-label">Email address</label>
        <input type="email" class="form-control m-b-md" id="signUpEmail" aria-describedby="signUpEmail" placeholder="example@neptune.com" name="email" 
        value="<?php
        if (isset($_SESSION['old_email'])) {
            echo $_SESSION['old_email'];
        }?>">

        <!-- email validation -->
        <?php if(isset($_SESSION['email-error'])):?>
        <div class="alert alert-danger">
            <?=$_SESSION['email-error']?>
        </div>
        <?php endif;?>

        <!-- email duplicate checker -->
        <?php if(isset($_SESSION['dup_email_error'])):?>
        <div class="alert alert-danger">
            <?=$_SESSION['dup_email_error']?>
        </div>
        <?php endif;?>

        <label for="signUpPassword" class="form-label">Password</label>
        <input type="password" class="form-control" id="signUpPassword" aria-describedby="signUpPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" name="password" 
        value="<?php
        if (isset($_SESSION['old_password'])) {
            echo $_SESSION['old_password'];
        }?>">
        <div id="emailHelp" class="form-text m-b-md"><p class="text-danger">Password must be minimum 8 characters length*</p></div>

        <!-- password validation -->
        <?php if(isset($_SESSION['password-error'])):?>
        <div class="alert alert-danger">
            <?=$_SESSION['password-error']?>
        </div>
        <?php endif;?>

        <label for="signUpPassword" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="signUpPassword" aria-describedby="signUpPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" name="confirm_password"
        value="<?php
        if (isset($_SESSION['old_confirm_password'])) {
            echo $_SESSION['old_confirm_password'];
        }?>">

        <!-- confirm password validation -->
        <?php if(isset($_SESSION['confirm_password-error'])):?>
        <div class="alert alert-danger mt-4">
            <?=$_SESSION['confirm_password-error']?>
        </div>
        <?php endif;?>

        <!-- password match validation -->
        <?php if(isset($_SESSION['password_match_error'])):?>
        <div class="alert alert-danger mt-4">
            <?=$_SESSION['password_match_error']?>
        </div>
        <?php endif;?>

        <!-- preg-match validation -->
        <?php if(isset($_SESSION['preg_ma_error'])):?>
        <div class="alert alert-danger mt-4">
            <?=$_SESSION['preg_ma_error']?>
        </div>
        <?php endif;?>
    </div>

    <div class="auth-submit">
        <button type="submit" class="btn btn-primary">Sign Up</button>
    </div>
    
</form>