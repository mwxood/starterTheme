<?php

defined('ABSPATH') || exit;

get_header(); ?>

<div class="container">
    <?php if(have_posts ()):  the_post (); ?>

    <?php the_title('<h2>', '</h2>'); ?>

    <?php the_content(); ?>

    <a href="<?php the_permalink(); ?>">View more</a>

    <?php endif; ?>
</div>

<?php get_footer(); ?>