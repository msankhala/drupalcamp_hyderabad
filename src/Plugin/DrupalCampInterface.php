<?php

/**
 * @file
 * Contains Drupal\drupalcamp_hyderabad\Plugin\DrupalCampInterface.
 */

namespace Drupal\drupalcamp_hyderabad\Plugin;


interface DrupalCampInterface {
  /**
   * Returns the drupalcamp location.
   *
   * @return string
   *   The drupalcamp location.
   */
  public function getLocation();
}
