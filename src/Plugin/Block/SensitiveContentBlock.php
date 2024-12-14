<?php

namespace Drupal\sensitive_content_checker\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\DependencyInjection\ContainerInterface;
use Drupal\sensitive_content_checker\SensitiveContentCheckerSettings;

/**
 * Provides a block for sensitive content.
 *
 * @Block(
 *   id = "sensitive_content_block",
 *   admin_label = @Translation("Sensitive Content Block")
 * )
 */
class SensitiveContentBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    // Get the blocked classes from configuration.
    $blocked_classes = \Drupal::config('sensitive_content_checker.settings')->get('blocked_classes');

    if (empty($blocked_classes)) {
      $blocked_classes = ''; // or provide a default value
    }

    // Return the block with necessary JS and CSS attached.
    return [
      '#markup' => '<div id="sensitive-content"></div>',
      '#attached' => [
        'library' => [
          'sensitive_content_checker/sensitive_content_styles',
          'sensitive_content_checker/sensitive_content_checker',
        ],
        'drupalSettings' => [
          'sensitive_content_checker' => [
            'blockedClasses' => $blocked_classes,
          ],
        ],
      ],
    ];
  }
}
