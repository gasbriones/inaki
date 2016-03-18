<nav class="mobile-menu-wrapper">
    <div class="grid-3-center buttons-nav">
        <div class="col-10_lg-9_md-11_sm-12_xs-12">
            <div class="close left">
                X Cerrar
            </div>
            <div class="logo left">
                <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png" alt="Iñaki restaurante logo"></a>
            </div>
        </div>
    </div>
    <?php wp_nav_menu(array('theme_location' => 'mobile-menu')); ?>
</nav>