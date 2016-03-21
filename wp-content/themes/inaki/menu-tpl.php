<div class="grid mobile-menu-wrapper">
    <div class="col-12_lg-12_md-12_sm-11_xs-12">
        <div class="grid-3-center buttons-nav">
            <div class="col-10_lg-9_md-9_sm-9_xs-11">
                <div class="icon icon-close close left">
                    Cerrar
                </div>
                <div class="logo left">
                    <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png" alt="Iñaki restaurante logo"></a>
                </div>
            </div>
        </div>
        <?php wp_nav_menu(array('theme_location' => 'mobile-menu')); ?>
        <div class="contact grid-3-center">
            <div class="col-9_lg-9_md-9_sm-9_xs-8">
                <a href="tel:43845497">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/contacto.png" alt="Iñaki restaurante contacto">
                </a>
            </div>
        </div>
    </div>
</div>

