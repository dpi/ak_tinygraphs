<?php

declare(strict_types = 1);

namespace dpi\ak_tinygraphs\AvatarKit\AvatarServices;

use dpi\ak\AvatarIdentifierInterface;
use dpi\ak\AvatarKit\AvatarServices\AvatarServiceBase;
use dpi\ak_tinygraphs\TinygraphsAvatarConfigurationInterface;

/**
 * Common functionality for Tinygraph services.
 *
 * @method \dpi\ak_tinygraphs\TinygraphsAvatarConfigurationInterface getConfiguration()
 */
abstract class TinygraphsBase extends AvatarServiceBase implements TinygraphsInterface {

  /**
   * {@inheritdoc}
   *
   * @var \dpi\ak_tinygraphs\TinygraphsAvatarConfigurationInterface
   */
  protected $configuration;

  /**
   * {@inheritdoc}
   */
  public function __construct(TinygraphsAvatarConfigurationInterface $configuration) {
    parent::__construct($configuration);
  }

  /**
   * {@inheritdoc}
   */
  public function getAvatar(AvatarIdentifierInterface $identifier) : string {
    $components = [];

    $components['scheme'] = $this->getConfiguration()->getProtocol();

    $components['host'] = 'www.tinygraphs.com';

    // Path.
    $identifier = $identifier->getHashed();
    $components['path'] = '/' . $this->getType() . '/' . $identifier;

    // Query.
    $query = [];

    // Width.
    $width = $this->getConfiguration()->getWidth();
    if ($width) {
      $query['size'] = $width;
    }

    // Theme.
    $theme = $this->getConfiguration()->getTheme();
    if ($theme) {
      $query['theme'] = $this->getConfiguration()->getTheme();
    }
    else {
      throw new \InvalidArgumentException('Missing Tinygraphs theme.');
    }

    $components['query'] = http_build_query($query);

    return \http_build_url($components);
  }

}
