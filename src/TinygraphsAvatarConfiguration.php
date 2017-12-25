<?php

declare(strict_types = 1);

namespace dpi\ak_tinygraphs;

use dpi\ak\AvatarConfiguration;

/**
 * Avatar configuration.
 */
class TinygraphsAvatarConfiguration extends AvatarConfiguration implements TinygraphsAvatarConfigurationInterface {

  /**
   * The theme.
   *
   * @var string|null
   */
  protected $theme;

  /**
   * {@inheritdoc}
   */
  public function getTheme(): ?string {
    return $this->theme;
  }

  /**
   * {@inheritdoc}
   */
  public function setTheme($theme) {
    $this->theme = $theme;
    return $this;
  }

}
