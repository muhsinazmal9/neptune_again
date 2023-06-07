<?php
require_once('components/header.php');

// user count
$user_count = "SELECT COUNT(*) AS userCount FROM users";
$user_count_final = mysqli_query($db_connect, $user_count);
$user_count_final_f_a = mysqli_fetch_assoc($user_count_final)['userCount'];
// user id name email select
$user_select = "SELECT id, name , email FROM users";
$user_select_final = mysqli_query($db_connect, $user_select);
?>
<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Users</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card widget widget-list">
                        <div class="card-header">
                            <h5 class="card-title">Active Users<span class="badge badge-success badge-style-light">
                                    <?= $user_count_final_f_a ?> users
                                </span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <span class="text-muted m-b-xs d-block">showing 5 out of
                                <?= $user_count_final_f_a ?> active users.
                            </span>
                            <ul class="widget-list-content list-unstyled" style="height: 400px; overflow-y: scroll;">

                                <?php foreach ($user_select_final as $key => $users): ?>
                                    <li class="widget-list-item widget-list-item-green my-2">
                                        <span class="widget-list-item-avatar">
                                            <div class="avatar avatar-rounded">
                                                <div class="avatar-title">
                                                    <?= $key + 1 ?>
                                                </div>
                                            </div>
                                        </span>
                                        <span class="widget-list-item-description">
                                            <h5 class="widget-list-item-description-title m-0">
                                                <?= ($users['name']) ?>
                                            </h5>
                                            <span class="widget-list-item-description-subtitle">
                                                <?= ($users['email']) ?>
                                            </span>
                                        </span>
                                    </li>
                                <?php endforeach; ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

<?php require_once('components/footer.php'); ?>