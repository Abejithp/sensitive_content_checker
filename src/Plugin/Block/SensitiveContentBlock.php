<?php

namespace Drupal\sensitive_content_checker\Plugin\Block;

use Drupal\Core\Block\BlockBase;

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
    return [
      '#markup' => '<div id="sensitive-content"></div>',
      '#attached' => [
        'library' => [
          'sensitive_content_checker/sensitive_content_styles',
          'sensitive_content_checker/sensitive_content_checker',
        ],
      ],
    ];
  }
}
