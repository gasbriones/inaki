<?php
/*
Template Name: en casa
*/


get_header(); ?>
<body <?php body_class('page-tpl'); ?>>
<?php include 'menu-tpl.php'?>
<div class="wrapper clearfix">
    <div class="grid-reverse site">
        <div class="col-5_lg-5_md-5_sm-12_xs-12 menu-wrapper">
            <?php get_template_part('menu'); ?>
        </div>
        <div class="col-7_lg-7_md-7_sm-12_xs-12 content-wrapper">
            <section class="content in-house">
                <h2 class="page-title"><?php the_title(); ?></h2>
                <div class="clearfix">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="section-img">
                            <img src="<?php echo the_field('imagen_1_en_casa')?>"/>
                        </div>
                        <article class="paragraph">
                            <?php the_content(); ?>
                        </article>
                    <?php endwhile; endif; ?>
                </div>
            </section>
        </div>
    </div>
</div>
<?php get_footer();?>
</body>
</html>