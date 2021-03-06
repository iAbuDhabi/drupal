<?php

namespace Drupal\Tests\node\Functional\Views;

use Drupal\Tests\views\Functional\ViewTestBase;
use Drupal\views\Tests\ViewTestData;

/**
 * Base class for all node Views tests.
 */
abstract class NodeTestBase extends ViewTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = ['node_test_views'];

  /**
   * {@inheritdoc}
   */
  protected function setUp($import_test_views = TRUE): void {
    parent::setUp($import_test_views);

    if ($import_test_views) {
      ViewTestData::createTestViews(static::class, ['node_test_views']);
    }
  }

}
