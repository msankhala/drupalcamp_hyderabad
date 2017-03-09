<?php

/**
 * @file
 * Contains Drupal\drupalcamp_hyderabads\DrupalCampBase.
 */

namespace Drupal\drupalcamp_hyderabad\Plugin;

use Drupal\Core\Plugin\PluginBase;
use Drupal\drupalcamp_hyderabad\Plugin\DrupalCampInterface;

class DrupalCampBase extends PluginBase implements DrupalCampInterface{
  public function getLocation() {
    return $this->pluginDefinition['location'];
  }
}
