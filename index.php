<?php

defined('ABSPATH') || exit;

get_header(); ?>

<?php if(have_posts ()):  the_post (); ?>

    <?php the_title('<h2>', '</h2>'); ?>

    <?php the_content(); ?>

    <a href="<?php the_permalink(); ?>">View more</a>

<?php endif; ?>

<?php get_footer(); ?>