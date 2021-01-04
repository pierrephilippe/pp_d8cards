<?php

namespace Drupal\pp_d8cards\Controller;

use Drupal\Core\Controller\ControllerBase;


/**
 * Class ConfigController.
 */
class ConfigController extends ControllerBase {

  /**
   * Configuration.
   *
   * @return string
   *   Return Hello string.
   */
  public function configuration() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: configuration')
    ];
  }

}
