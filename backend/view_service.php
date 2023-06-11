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
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title">List of services</h5>
                            <a href="add_service.php" class="btn btn-info">Add Service</a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Icon</th>
                                        <th>Header</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th width="250px">---</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $service_select_query = "SELECT * FROM services";
                                    $service_select_query_final = mysqli_query($db_connect, $service_select_query);


                                    foreach ($service_select_query_final as $key => $service): ?>
                                        <tr>
                                            <th>
                                                <?= ++$key ?>
                                            </th>
                                            <td>
                                                <i class='<?= $service['service_icon'] ?>'></i>
                                            </td>
                                            <td>
                                                <?= $service['service_header'] ?>
                                            </td>
                                            <td>
                                                <?= $service['service_description'] ?>
                                            </td>
                                            <td>
                                                <?= $service['status'] ?>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <a href="update_service.php?id=<?=$service['id']?>" class="btn btn-info">Update</a>
                                                    <a class="btn btn-danger">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('components/footer.php') ?>




<!-- service_icon
service_header
service_description -->