<section>

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <!-- loop -->
                    <!-- <php for( $i = 0; $i < 6; $i++ ) { ?>
                        <div class="col-lg-4 my-2">
                            <a href="#">
                                <img
                                class="img-fluid w-100 px:u-h-262 u-object-fit-cover"
                                src="<php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/photo-1.png"
                                alt="Foto 1">
                            </a>
                        </div>
                    <php } ?>  -->

                    <div class="row">

                            <!-- loop -->
                            <?php 
                                //$editorial_slug_current = 'caridade';
                                //strtolower(get_the_title());

                                $args = array(
                                    'posts_per_page' => 1,
                                    'post_type'      => 'album',
                                    // 'tax_query'      => array(
                                    //     array(
                                    //         'taxonomy' => 'categoria-foto',
                                    //         'field'    => 'slug',
                                    //         'terms'    => array( $editorial_slug_current )
                                    //     )
                                    // )
                                );

                                $gallery = new WP_Query( $args );
                                $count = 0;

                                if( $gallery->have_posts() ) :
                                    while( $gallery->have_posts() ) : $gallery->the_post();

                                        $photos = get_field( 'galeria' );

                                        if( $photos ) :
                                            foreach( $photos as $photo ) :     
                                                $count++;
                            ?>
                                                <div class="col-md-4 my-2">
                                                    <a 
                                                    class="l-photos__photo overflow-hidden position-relative d-block" 
                                                    href="<?php the_permalink() ?>">
                                                        <img
                                                        class="img-fluid w-100 u-object-fit-cover"
                                                        style="height:296px"
                                                        src="<?php echo $photo['url'] ?>"
                                                            alt="<?php echo $photo['title']; ?>">
                                                    </a>
                                                </div>
                            <?php
                                                if( $count == 12 )
                                                    break;
                                            endforeach;
                                        endif;
                                    endwhile;
                                endif;

                                wp_reset_query();
                            ?>
                            <!-- end loop -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-5">

                <div class="row justify-content-center">

                    <div class="col-9 d-none d-xl-flex justify-content-center align-items-center">
                        <div class="w-100 u-border-b-5 u-border-color-dark-marron"></div>
                    </div>

                    <div class="col-9 col-xl-3">

                        <div class="row">

                            <div class="col-12">
                                <a
                                class="w-100 d-block u-font-size-22 u-font-weight-bold u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-golden py-2"
                                href="<?php echo get_home_url( null, '/fotos/?cat=caridade' ) ?>">
                                    Todas as Fotos
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    <!-- end loop -->
                </div>
            </div>
        </div>
    </div>
</section>