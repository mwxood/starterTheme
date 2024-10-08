<?php

defined("ABSPATH") || exit(); ?>

<footer class="footer">
    <div class="container">
      <?php if (is_active_sidebar("footer")): ?>
          <div class="<?= apply_filters(
            "bootscore/class/footer/top",
            ""
          ) ?> starter_theme_footer">
            <div class="<?= apply_filters(
              "bootscore/class/container",
              "container",
              "footer"
            ) ?>">
              <?php dynamic_sidebar("footer"); ?>
            </div>
          </div>
        <?php endif; ?>

        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
          <p>&copy; <?php echo date(
            "Y"
          ); ?> Company, Inc. All rights reserved.</p>
          <ul class="list-unstyled d-flex">
            <li class="ms-3"><a class="link-body-emphasis" href="#">facebook</a></li>
            <li class="ms-3"><a class="link-body-emphasis" href="#">x</a></li>
            <li class="ms-3"><a class="link-body-emphasis" href="#">apple</a></li>
          </ul>
      </div>
    </div><!-- end container -->
</footer>
</div><!-- end container -->

<?php wp_footer(); ?>
</body>
</html>