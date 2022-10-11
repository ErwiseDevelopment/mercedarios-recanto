<section>

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <!-- loop -->
                    <?php for( $i = 0; $i < 6; $i++ ) { ?>
                        <div class="col-lg-4 my-2">
                            <a href="#">
                                <img
                                class="img-fluid w-100 px:u-h-262 u-object-fit-cover"
                                src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/photo-1.png"
                                alt="Foto 1">
                            </a>
                        </div>
                    <?php } ?> 
                    <!-- end loop -->
                </div>
            </div>
        </div>
    </div>
</section>