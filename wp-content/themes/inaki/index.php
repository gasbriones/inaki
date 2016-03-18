<?php get_header(); ?>
<body <?php body_class(); ?>>
  <?php include 'menu-tpl.php'?>
  <div class="wrapper wrapper-index clearfix">
    <?php get_template_part('content-header'); ?>
    <section id="main" class="clearfix">
      <div class="grid-3-center">
        <div class="col-6_lg-7_md-7_sm-10_xs-12">
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/images/plato-rojo.png" alt="Iñaki enter site" class="enter-site-img"/>
          </a>
        </div>
      </div>
    </section>
  </div>
</body>
</html>