<?php
/*
Template Name: la historia
*/
get_header(); ?>
<body <?php body_class('page-tpl'); ?>>

<div class="wrapper clearfix">
    <?php include 'menu-tpl.php'?>
    <div class="grid-reverse site">
        <div class="col-5_lg-5_md-5_sm-12_xs-12 menu-wrapper">
            <?php get_template_part('menu'); ?>
        </div>
        <div class="col-7_lg-7_md-7_sm-12_xs-12 content-wrapper">
            <section class="content">
                <h2 class="page-title"><?php the_title(); ?></h2>
                <div class="the-history">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <article class="paragraph">
                            <?php the_content(); ?>
                        </article>
                        <div class="section-img">
                            <img src="<?php echo the_field('imagen_1_la_historia') ?>"/>
                            <div class="deco-img history-img-1 wow bounceInRight"></div>
                        </div>
                        <article class="paragraph">
                            <?php echo the_field('bloque_2_la_historia') ?>
                        </article>
                        <div class="section-img">
                            <img src="<?php echo the_field('imagen_2_la_historia') ?>"/>
                            <div class="deco-img history-img-1 wow bounceInRight"></div>
                        </div>
                        <article class="paragraph">
                            <?php echo the_field('bloque_3_la_historia') ?>
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