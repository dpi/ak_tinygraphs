<?php

declare(strict_types = 1);

namespace dpi\ak_tinygraphs\AvatarKit\AvatarServices;

use dpi\ak\AvatarKit\AvatarServices\AvatarServiceInterface;

/**
 * Interface ServiceInterface.
 */
interface TinygraphsInterface extends AvatarServiceInterface {

  /**
   * Determine the type of Tinygraph.
   *
   * @return string
   *   The API identifier for type.
   */
  public function getType();

}
