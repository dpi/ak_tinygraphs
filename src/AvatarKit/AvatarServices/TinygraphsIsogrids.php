<?php

declare(strict_types = 1);

namespace dpi\ak_tinygraphs\AvatarKit\AvatarServices;

/**
 * Isogrids Tinygraphs.
 *
 * @AvatarService(
 *   id = "tinygraphs_isogrids",
 *   name = "Isogrids",
 *   description = "Square as provided by Tinygraph.",
 *   protocols = {
 *     "http"
 *   },
 *   mime = {
 *     "image/svg+xml"
 *   },
 *   is_dynamic = FALSE,
 *   is_fallback = TRUE,
 *   is_remote = TRUE
 * )
 */
class TinygraphsIsogrids extends TinygraphsBase {

  /**
   * {@inheritdoc}
   */
  public function getType() {
    return 'isogrids';
  }

}
