<?php
/*
Template Name: la bodega
*/

$args = array(
    'cat' => 2,
    'order' => 'ASC'
);

$query = new WP_Query($args);

get_header(); ?>
<body <?php body_class('page-tpl'); ?>>
<div class="wrapper clearfix">
    <div class="grid-reverse site">
        <div class="col-5_lg-5_md-5_sm-12_xs-12 menu-wrapper">
            <?php get_template_part('menu'); ?>
        </div>
        <div class="col-7_lg-7_md-7_sm-12_xs-12 content-wrapper">
            <section class="content">
                <h2 class="page-title"><?php the_title(); ?></h2>
                <div class="clearfix">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <article class="paragraph">
                            <?php the_content(); ?>
                        </article>
                        <div class="section-img">
                            <img src="<?php echo the_field('imagen_1_la_bodega') ?>"/>
                        </div>
                        <div class="wines">
                            <ul class="wines-list">
                                <?php
                                if ($query->have_posts()):
                                    while ($query->have_posts()):$query->the_post();
                                        ?>
                                        <li>
                                            <ul class="wines-details">
                                                <li class="wine-title"><?php the_title(); ?></li>
                                                <li class="wine-description"><?php the_content(); ?></li>
                                            </ul>
                                        </li>
                                    <?php endwhile;
                                else:
                                    echo '<li class="error">No se encontraron productos</li>';
                                endif;
                                ?>
                            </ul>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
            </section>
        </div>
    </div>
</div>
</body>
</html>