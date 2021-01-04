<?php

namespace Drupal\pp_d8cards\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the pp_d8cards module.
 */
class ConfigControllerTest extends WebTestBase {


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return [
      'name' => "pp_d8cards ConfigController's controller functionality",
      'description' => 'Test Unit for module pp_d8cards and controller ConfigController.',
      'group' => 'Other',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests pp_d8cards functionality.
   */
  public function testConfigController() {
    // Check that the basic functions of module pp_d8cards.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
