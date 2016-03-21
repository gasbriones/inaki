<?php
$args = array(
  'cat' => 3,
  'orderby' => 'rand',
  'numberposts' => '1'
);

$query = new WP_Query($args);

get_header();

?>
<body <?php body_class(); ?>>
  <?php include 'menu-tpl.php'?>
  <div class="wrapper wrapper-index clearfix">
    <?php get_template_part('content-header'); ?>
    <section id="main" class="clearfix">
      <div class="grid-3-center">
        <div class="col-6_lg-7_md-7_sm-10_xs-12">

          <?php
            if ($query->have_posts()):
              while ($query->have_posts()):$query->the_post(); ?>
                <a href="#">
                  <img src="<?php echo the_field('imagen_plato') ?>"/>
                </a>
          <?php endwhile; endif;?>
        </div>
      </div>
    </section>
  </div>
  <?php get_footer();?>
</body>
</html>