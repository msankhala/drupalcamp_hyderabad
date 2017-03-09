<?php

/**
 * @file
 * Contains Drupal\drupalcamp_hyderabads\DemoService.
 */

namespace Drupal\drupalcamp_hyderabad;

class DemoService {

  protected $demo_value;

  public function __construct() {
    $this->demo_value = 'DrupalCampHyderabad';
  }

  public function getDemoValue() {
    return $this->demo_value;
  }

}
