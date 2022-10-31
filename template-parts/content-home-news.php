<section class="overflow-hidden py-5">

    <div class="container">

        <div class="row">

            <div class="col-12 d-flex justify-content-center mb-5">
                
                <h2 class="c-title-pattern pb-2">
                    Notícias    

                    <span class="c-title-pattern__underline"></span>
                </h2>
            </div>

            <div class="col-12">

                <!-- swiper -->
                <div class="swiper-container js-swiper-news pb-5">

                    <div class="swiper-wrapper">

                    <?php
                        $link_pattern = get_field( 'link_padrao_portal', 'option' );
                        $post_link = $link_pattern . get_field( 'link_noticia', 'option' );
                        $request_posts = wp_remote_get( $post_link );
                        $count = 0;

                        if(!is_wp_error( $request_posts )) :
                            $body = wp_remote_retrieve_body( $request_posts );
                            $data = json_decode( $body );

                            if(!is_wp_error( $data )) :
                                foreach( $data as $rest_post ) :
                                    $count++;
                                    $id = array( $rest_post->id );
                    ?>

                            <div class="swiper-slide">    
                                <a 
                                class="card h-100 u-border-color-dark-golden rounded-0 text-decoration-none"
                                href="<?php echo get_home_url( null, 'noticias/?id=' . $rest_post->id )  ?>">

                                    <div class="card-img">
                                        <img
                                        class="img-fluid w-100"
                                        src="<?php echo $rest_post->featured_image_src; ?>"
                                        alt="<?php echo $rest_post->title->rendered; ?>">
                                    </div>

                                    <div class="card-body pb-5">

                                        <p class="u-font-size-12 xxl:u-font-size-15 u-font-weight-bold u-font-family-lato u-color-folk-dark-golden">
                                            <!-- <span class="u-font-weight-medium">por</span>  <br> -->
                                                    <?php 
                                                        $data = $rest_post->post_date;
                                                        $data_format = get_date_format( $data );

                                                        echo $data_format;  
                                                    ?>
                                        </p>

                                        <h4 class="u-font-size-18 xxl:u-font-size-22 u-font-weight-bold u-font-family-cinzel u-color-folk-dark-gray">
                                                <?php echo $rest_post->title->rendered; ?>
                                        </h4>

                                        <span class="u-font-size-14 xxl:u-font-size-17 u-font-weight-light u-font-style-italic u-font-family-lato u-color-folk-dark-gray">
                                            <?php echo $rest_post->post_excerpt; ?>
                                        </span>
                                    </div>

                                    <div class="c-card-footer-absolute card-footer">

                                        <div class="row justify-content-center">

                                            <div class="col-6">
                                                <p class="u-font-size-12 u-font-weight-bold u-font-family-nunito text-center u-color-folk-white u-bg-folk-green hover:u-bg-folk-dark-golden mb-0 py-2">
                                                    Ler mais
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>                            
                            <?php
                                    
                                endforeach;
                            endif;
                        endif;
                    ?>
                    </div>
                </div>

               <div class="swiper-pagination swiper-pagination-news w-100 js-swiper-pagination-news"></div>
                <!-- end swiper -->
            </div>

            <div class="col-12 mt-5">

                <div class="row justify-content-center">

                    <div class="col-9 d-none d-xl-flex justify-content-center align-items-center">
                        <div class="w-100 u-border-b-5 u-border-color-dark-golden"></div>
                    </div>

                    <div class="col-9 col-xl-3">

                        <div class="row">

                            <div class="col-12">
                                <a
                                class="w-100 d-block u-font-size-22 u-font-weight-bold u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-golden py-2"
                                href="#">
                                    Todas os Notícias
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>