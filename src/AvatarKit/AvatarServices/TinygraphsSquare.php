<?php

declare(strict_types = 1);

namespace dpi\ak_tinygraphs\AvatarKit\AvatarServices;

/**
 * Square Tinygraphs.
 *
 * @AvatarService(
 *   id = "tinygraphs_square",
 *   name = "Square",
 *   description = "Square as provided by Tinygraph.",
 *   protocols = {
 *     "http"
 *   },
 *   mime = {
 *     "image/jpeg",
 *     "image/svg+xml"
 *   },
 *   dimensions = "6x6-999x999",
 *   is_dynamic = FALSE,
 *   is_fallback = TRUE,
 *   is_remote = TRUE
 * )
 */
class TinygraphsSquare extends TinygraphsBase {

  /**
   * {@inheritdoc}
   */
  public function getType() {
    return 'squares';
  }

}
