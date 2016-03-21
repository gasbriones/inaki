<?php
/*
Template Name: como llegar
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
            <section class="content">
                <h2 class="page-title"><?php the_title(); ?></h2>
                <div class="clearfix">
                    en casa
                </div>
            </section>
        </div>
    </div>
</div>
<?php get_footer();?>
</body>
</html>