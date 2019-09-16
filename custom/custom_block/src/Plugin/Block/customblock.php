<?php
/**
 * @file
 * Contains \Drupal\custom_block\Plugin\Block\customblock.
 */

namespace Drupal\custom_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Custom' block.
 *
 * @Block(
 *   id = "custom_block",
 *   admin_label = @Translation("Custom block"),
 *   category = @Translation("Custom")
 * )
 */

class customblock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#type' => 'markup',
      '#markup' => 'Hello Rohit Rajput This Is Your Custom Block.',
    );
  }
}