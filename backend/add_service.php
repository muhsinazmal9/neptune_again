<?php require_once('components/header.php') ?>

<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Services</h1>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="m-0">Add Service</h4>
                        </div>
                        <hr>
                        <div class="card-body pb-0">
                            <form action="add_service_post.php" method="post">
                                <input type="text" class="form-control form-control-solid-bordered" name="service_icon"
                                    placeholder="Service Icon (className)">
                                <input type="text" class="form-control form-control-solid-bordered mt-4"
                                    name="service_header" placeholder="Service Header">
                                <textarea class="form-control form-control-solid-bordered mt-4"
                                    name="service_description" cols="30" rows="10"
                                    placeholder="Service Description"></textarea>

                                <select class="form-select form-select-solid-bordered mt-4" name="status">
                                    <option selected>Active</option>
                                    <option>Deactive</option>
                                </select>

                                <div class="d-flex align-items-center gap-4 mt-4">
                                    <button type="submit" class="btn btn-primary" name="">Add</button>
                                    <?php if (isset($_SESSION['service_all_field_error'])): ?>
                                        <span class="text-danger">
                                            <?= $_SESSION['service_all_field_error']; ?>
                                        </span>
                                    <?php endif; ?>
                                </div>

                            </form>
                        </div>
                        <a href="view_service.php" target="_blank" class="btn btn-success mt-4 rounded-0 rounded-bottom" name="">
                            View All Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('components/footer.php');

unset(
    $_SESSION['service_all_field_error']
    );

?>