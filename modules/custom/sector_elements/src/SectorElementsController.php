<?php
/**
 * @file
 * Contains \Drupal\sector_elements\SectorElementsController.
 */

namespace Drupal\sector_elements;
use Drupal\Core\Controller\ControllerBase;

class SectorElementsController extends ControllerBase {
  public function index() {
    return array(
        '#markup' => '' . t('Hello there!') . '',
    );
  }
}