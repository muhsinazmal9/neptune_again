<?php require_once('components/header.php') ?>

<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Dashboard</h1>
                        <div class="alert alert-primary mt-4">
                            <h3 class="alert-heading">
                                Hello <strong>
                                    <?= $_SESSION['select_name'] ?> !
                                </strong>
                            </h3>
                            <p class="mb-0">
                                Your ID :
                                <?= $_SESSION['select_id'] ?>
                            </p>
                            <p class="mb-0">
                                Your e-mail :
                                <?= $_SESSION['select_email'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="card widget widget-stats">
                        <div class="card-body">
                            <div class="widget-stats-container d-flex">
                                <div class="widget-stats-icon widget-stats-icon-primary">
                                    <i class="material-icons-outlined">paid</i>
                                </div>
                                <div class="widget-stats-content flex-fill">
                                    <span class="widget-stats-title">Today's Sales</span>
                                    <span class="widget-stats-amount">$38,211</span>
                                    <span class="widget-stats-info">471 Orders Total</span>
                                </div>
                                <div class="widget-stats-indicator widget-stats-indicator-negative align-self-start">
                                    <i class="material-icons">keyboard_arrow_down</i> 4%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card widget widget-stats">
                        <div class="card-body">
                            <div class="widget-stats-container d-flex">
                                <div class="widget-stats-icon widget-stats-icon-warning">
                                    <i class="material-icons-outlined">person</i>
                                </div>
                                <div class="widget-stats-content flex-fill">
                                    <span class="widget-stats-title">Active Users</span>
                                    <span class="widget-stats-amount">23,491</span>
                                    <span class="widget-stats-info">790 unique this month</span>
                                </div>
                                <div class="widget-stats-indicator widget-stats-indicator-positive align-self-start">
                                    <i class="material-icons">keyboard_arrow_up</i> 12%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card widget widget-stats">
                        <div class="card-body">
                            <div class="widget-stats-container d-flex">
                                <div class="widget-stats-icon widget-stats-icon-danger">
                                    <i class="material-icons-outlined">file_download</i>
                                </div>
                                <div class="widget-stats-content flex-fill">
                                    <span class="widget-stats-title">Downloads</span>
                                    <span class="widget-stats-amount">140,390</span>
                                    <span class="widget-stats-info">87 items downloaded</span>
                                </div>
                                <div class="widget-stats-indicator widget-stats-indicator-positive align-self-start">
                                    <i class="material-icons">keyboard_arrow_up</i> 7%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xl-12">
                    <div class="card widget widget-stats-large">
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="widget-stats-large-chart-container">
                                    <div class="card-header">
                                        <h5 class="card-title">Earnings<span
                                                class="badge badge-light badge-style-light">Last
                                                Year</span>
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <div id="apex-earnings"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="widget-stats-large-info-container">
                                    <div class="card-header">
                                        <h5 class="card-title">Report<span
                                                class="badge badge-info badge-style-light">Updated 5 min
                                                ago</span></h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-description">Duis fringilla eget velit sit amet lobortis.
                                            Donec rutrum, arcu auctor varius cursus. mi nulla dapibus justo, at
                                            volutpat libero</p>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Neptune - v1.0<span
                                                    class="float-end text-success">14%<i
                                                        class="material-icons align-middle">keyboard_arrow_up</i></span>
                                            </li>
                                            <li class="list-group-item">Space - v1.2<span
                                                    class="float-end text-danger">7%<i
                                                        class="material-icons align-middle">keyboard_arrow_down</i></span>
                                            </li>
                                            <li class="list-group-item">Lime - v1.0.3<span
                                                    class="float-end text-success">21%<i
                                                        class="material-icons align-middle">keyboard_arrow_up</i></span>
                                            </li>
                                            <li class="list-group-item">Circl - v2.3<span
                                                    class="float-end text-success">17%<i
                                                        class="material-icons align-middle">keyboard_arrow_up</i></span>
                                            </li>
                                            <li class="list-group-item">Connect - v1.7<span
                                                    class="float-end text-danger">3%<i
                                                        class="material-icons align-middle">keyboard_arrow_down</i></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('components/scr-bodyEnd-htmlEnd.php');
?>