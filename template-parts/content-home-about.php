<section class="l-about pt-4 pb-5">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">
 
                    <div class="col-lg-6 mb-3 mb-lg-5">
                        <img
                        class="img-fluid w-100 u-object-fit-cover"
                        src=" <?php echo get_field( 'imagem' ) ?>"
                        alt="Conheça o Recanto Mercê">
                    </div>

                    <div class="col-lg-6 mb-lg-5 pb-3">
                        <h4 class="u-font-size-32 lg:u-font-size-42 xxl:u-font-size-54 u-font-weight-bold u-font-family-cinzel u-color-folk-white">
                        <?php echo get_field('titulo_mecedarios') ?>
                        </h4>

                        <p class="u-font-size-18 lg:u-font-size-22 xxl:u-font-size-30 u-font-weight-regular u-font-family-lato u-color-folk-white">
                            <?php echo get_field( 'descricao_mecedarios' ) ?> 
                        </p>
                        <div class="row justify-content-end">

                            <div class="col-6 col-xl-4 mt-5 mt-lg-0">
                                <a
                                class="w-100 d-block u-font-size-18 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-white u-bg-folk-golden py-2"
                                href="<?php echo get_home_url( null, '/' ) .  get_field( 'btn_saiba_mais' ) ?>">
                                    Saiba mais
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>