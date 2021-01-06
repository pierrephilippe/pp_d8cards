<?php declare(strict_types=1);

namespace Drupal\Tests\pp_d8cards\Functional;

use Drupal\Tests\BrowserTestBase;
use Drupal\TestTools\Comparator\MarkupInterfaceComparator;

/**
 * Provides automated tests for the pp_d8cards module.
 *
 * @group pp_d8cards
 */
class ConfigControllerTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  public static $modules = [
    'pp_d8cards',
  ];

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();
  }

  /**
   * Make sure everything works to this point.
   */
  public function testTheSiteStillWorks() {
    // Not doing anything right now, save it for later.
  }

}
