<section>

    <div class="container-fluid">

        <div class="row">

            <div class="col-12 px-0">

                <!-- swiper -->
                <div class="swiper-container js-swiper-banner-materials">

                    <div class="swiper-wrapper">

                        <!-- slide -->
                        <!-- <php for( $i = 0; $i < 3; $i++ ) { ?> -->
                            <div class="swiper-slide">
                                <a  href="<?php echo get_field('link_materiais', 'option')?>" <?php if (get_field('nova_guia_materiais', 'option') == '1') :?>  target="_blank" <?php endif; ?> rel="noreferrer noopener">
                                    <img
                                    class="img-fluid w-100"
                                    src="<?php echo get_fields('banner-materiais', 'option')?>"
                                    alt="Banner Material">
                                </a>
                            </div>
                        <!-- ?php } ?> -->
                        <!-- end slide -->
                    </div>
                </div>
                <!-- end swiper -->
            </div>
        </div>
    </div>
</section>