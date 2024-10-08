<?php
defined("ABSPATH") || exit();

add_filter("redirect_canonical", function ($redirected_url) {
  if (is_404()) {
    return false;
  }

  return $redirected_url;
});
