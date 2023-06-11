<?php include_once('components/header.php'); ?>
<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Profile</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="m-0">Name change</h4>
                        </div>
                        <hr>
                        <div class="card-body pb-5">
                            <form action="profile_post.php" method="post">
                                <input type="text" class="form-control form-control-solid-bordered" name="name_cng"
                                    value="<?= $_SESSION['select_name']; ?>">
                                <button type="submit" class="btn btn-primary mt-4" name="name_cng_btn">Change!</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="m-0">Profile picture change</h4>
                        </div>
                        <hr>
                        <div class="card-body pb-5">
                            <img class="mb-5" src="./uploads/dp/<?= $select_dp_assoc ?>" height="80" width="80"
                                alt="<?= $select_dp_assoc ?>">
                            <form action="profile_post.php" method="post" enctype="multipart/form-data">
                                <input type="file" class="form-control" name="pp_cng">
                                <button type="submit" class="btn btn-primary mt-4" name="pp_cng_btn">Change!</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6" style="margin-top:-120px;">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="m-0">Password change</h4>
                        </div>
                        <hr>
                        <div class="card-body pb-5">
                            <form action="profile_post.php" method="post">
                                <input type="password" class="form-control form-control-solid-bordered"
                                    name="current_password" placeholder="Current Password">

                                <?php if (isset($_SESSION['crn_pass_error'])): ?>
                                    <p class="text-danger mt-3 ps-3">
                                        <?= $_SESSION['crn_pass_error']; ?>
                                    </p>
                                <?php endif; ?>




                                <?php if (isset($_SESSION['pass_miss_match_error'])): ?>
                                    <p class="text-danger mt-3 ps-3">
                                        <?= $_SESSION['pass_miss_match_error']; ?>
                                    </p>
                                <?php endif; ?>

                                <input type="password" class="form-control form-control-solid-bordered my-3"
                                    name="new_password" placeholder="New Password">

                                <?php if (isset($_SESSION['n_pass_error'])): ?>
                                    <p class="text-danger mt-3 ps-3">
                                        <?= $_SESSION['n_pass_error']; ?>
                                    </p>
                                <?php endif; ?>

                                <input type="password" class="form-control form-control-solid-bordered"
                                    name="confirm_password" placeholder="Confirm New Password">

                                <?php if (isset($_SESSION['c_n_pass_error'])): ?>
                                    <p class="text-danger mt-3 ps-3">
                                        <?= $_SESSION['c_n_pass_error']; ?>
                                    </p>
                                <?php endif; ?>

                                <?php if (isset($_SESSION['pass_matching_error'])): ?>
                                    <p class="text-danger mt-3 ps-3">
                                        <?= $_SESSION['pass_matching_error']; ?>
                                    </p>
                                <?php endif; ?>


                                <?php if (isset($_SESSION['n_pass_preg_ma'])): ?>
                                    <p class="text-danger mt-3 ps-3">
                                        <?= $_SESSION['n_pass_preg_ma']; ?>
                                    </p>
                                <?php endif; ?>


                                <?php if (isset($_SESSION['cng_success'])): ?>
                                    <div class="alert alert-success mt-3">
                                        <?= $_SESSION['cng_success']; ?>
                                    </div>
                                <?php endif; ?>

                                <button type="submit" class="btn btn-primary mt-4" name="pass_cng_btn">Change!</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once('components/footer.php');
unset(
    $_SESSION['crn_pass_error'],
    $_SESSION['n_pass_error'],
    $_SESSION['c_n_pass_error'],
    $_SESSION['pass_miss_match_error'],
    $_SESSION['pass_matching_error'],
    $_SESSION['n_pass_preg_ma'],
    $_SESSION['cng_success']
);
?>