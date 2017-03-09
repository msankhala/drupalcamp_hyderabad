<?php

/**
 * @file
 * Contains \Drupal\demo\Controller\DemoController.
 */

namespace Drupal\drupalcamp_hyderabad\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * DemoController.
 */
class DemoController extends ControllerBase {

  protected $demoService;

  protected $drupalCampManager;

  /**
   * Class constructor.
   */
  public function __construct($demoService, $drupalCampManager) {
    $this->demoService = $demoService;
    $this->drupalCampManager = $drupalCampManager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('drupalcamp_hyderabad.demo_service'),
      $container->get('plugin.manager.drupalcamp')
    );
  }

  /**
   * Generates an example page.
   */
  public function demo() {
    $demoCampManager = $this->drupalCampManager->createInstance('demo_camp');
    $delhiCampManager = $this->drupalCampManager->createInstance('delhi_camp');

    return array(
//      '#markup' => t('Hello @value!', array('@value' => $this->demoService->getDemoValue())),
      '#markup' => t('Hello @value!  Hello @value2',
        array(
          '@value' => $demoCampManager->getLocation(),
          '@value2' => $delhiCampManager->getLocation()
        )
      ),
    );
  }
}
