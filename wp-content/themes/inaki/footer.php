<footer id="footer" class="wrapper">
    <?php wp_footer(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-2.1.3.min.js"></script>
    <?php if ( is_home() ): ?>
        <script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery.tooltipster.min.js"></script>
    <?php endif; ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>
</footer>
