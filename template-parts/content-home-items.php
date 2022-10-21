<section class="l-items pt-5">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <?php if(have_rows( 'icones' )) :
                            while(have_rows( 'icones' ) ) : the_row();
                        ?>
                        <div class="col-lg-4 my-3">

                            <div class="card border-0">
                                
                                <div class="card-img overflow-hidden mx-auto">
                                    <img
                                    class="img-fluid w-100 h-100 u-object-fit-cover"
                                    src="<?php echo get_sub_field('icone_c_fundo');?>"
                                    alt="Item 1">
                                </div>

                                <div class="card-body">
                                    
                                    <h5 class="u-font-size-22 xxl:u-font-size-30 u-font-weight-bold u-font-family-cinzel text-center u-color-folk-green mb-0">
                                        <?php echo get_sub_field('titulo_icon');?>
                                    </h5>

                                    <p class="u-font-size-15 xxl:u-font-size-18 u-font-weight-regular u-font-family-lato text-center">
                                     <?php echo get_sub_field('descricao_icon');?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile; 
                endif;
                     ?>
                </div>
            </div>
        </div>
    </div>
</section>