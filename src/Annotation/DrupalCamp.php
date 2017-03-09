<?php

namespace Drupal\drupalcamp_hyderabad\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines a DrupalCamp annotation object.
 *
 * @Annotation
 */
class DrupalCamp extends Plugin {

  /**
   * The plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The location of DrupalCamp.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $location = '';
}
