<?php

/**
 * @file
 * Contains Drupal\drupalcamp_hyderabads\DrupalCampPluginManager.
 */

namespace Drupal\drupalcamp_hyderabad\Plugin;

/**
 * Provides an DrupalCamp plugin manager.
 *
 * @see \Drupal\drupalcamp_hyderabad\Plugin\DrupalCampInterface
 * @see \Drupal\drupalcamp_hyderabad\Annotation
 * @see plugin_api
 */
use Drupal\Component\Plugin\Factory\DefaultFactory;
use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Plugin\DefaultPluginManager;

class DrupalCampPluginManager extends DefaultPluginManager {

  public function __construct(
    \Traversable $namespaces,
    CacheBackendInterface $cache_backend,
    ModuleHandlerInterface $module_handler,
    $plugin_interface = 'Drupal\drupalcamp_hyderabad\DrupalCampInterface',
    $plugin_definition_annotation_name = 'Drupal\drupalcamp_hyderabad\Annotation\DrupalCamp'
  ) {

    parent::__construct(
      'Plugin/DrupalCamp',
      $namespaces,
      $module_handler,
      $plugin_interface,
      $plugin_definition_annotation_name
    );

    $this->alterInfo('drupalcamp_info');
    $this->setCacheBackend($cache_backend, 'drupalcamp_info_plugins');
    $this->factory = new DefaultFactory($this->getDiscovery());
  }
}
