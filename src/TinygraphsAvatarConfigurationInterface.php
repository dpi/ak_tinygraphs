<?php

declare(strict_types = 1);

namespace dpi\ak_tinygraphs;

use dpi\ak\AvatarConfigurationInterface;

/**
 * Discovers avatar services.
 */
interface TinygraphsAvatarConfigurationInterface extends AvatarConfigurationInterface {

  /**
   * Get the theme.
   *
   * @return null|string
   *   The theme, or NULL if not set.
   */
  public function getTheme(): ?string;

  /**
   * Set the theme.
   *
   * @param null|string $theme
   *   The theme.
   *
   * @return $this
   *   This object.
   */
  public function setTheme($theme);

}
