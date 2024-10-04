<?php

defined('ABSPATH') || exit;

?>

<footer>
    <?php if (is_active_sidebar('footer')) : ?>
        <div class="<?= apply_filters('bootscore/class/footer/top', ''); ?> starter_theme_footer">
          <div class="<?= apply_filters('bootscore/class/container', 'container', 'footer'); ?>">
            <?php dynamic_sidebar('footer'); ?>
          </div>
        </div>
      <?php endif; ?>
</footer>

<?php wp_footer(); ?>
</body>
</html>