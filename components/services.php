<!-- Services-area -->
<section id="service" class="services-area pt-120 pb-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mb-70">
                    <span>WHAT WE DO</span>
                    <h2>Services and Solutions</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php 

            $service_select_query = "SELECT * FROM services WHERE status = 'Active'";
            $service_select_query_final = mysqli_query($db_connect,$service_select_query);


            foreach ($service_select_query_final as $service) : ?>
            <div class="col-lg-4 col-md-6">
                <div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                    <i class="<?=$service['service_icon']?>"></i>
                    <h3><?=$service['service_header']?></h3>
                    <p>
                        <?=$service['service_description']?>
                    </p>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>
<!-- Services-area-end -->