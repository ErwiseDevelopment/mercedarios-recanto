<section class="l-items pt-5">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <?php for( $i = 0; $i < 6; $i++ ) { ?>
                        <div class="col-lg-4 my-3">

                            <div class="card border-0">
                                
                                <div class="card-img overflow-hidden mx-auto">
                                    <img
                                    class="img-fluid w-100 h-100 u-object-fit-cover"
                                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/item-1.png"
                                    alt="Item 1">
                                </div>

                                <div class="card-body">
                                    
                                    <h5 class="u-font-size-22 xxl:u-font-size-30 u-font-weight-bold u-font-family-cinzel text-center u-color-folk-green mb-0">
                                        Vivência
                                        Fraterna
                                    </h5>

                                    <p class="u-font-size-15 xxl:u-font-size-18 u-font-weight-regular u-font-family-lato text-center">
                                        Será essencial, pois, cada interno tem que 
                                        ter em mente que todos ali buscam o 
                                        mesmo ideal, que é a libertação. Isso se 
                                        dará a partir do acolhimento e da ajuda ao 
                                        próximo durante o processo de recuperação.
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>