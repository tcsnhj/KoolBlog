<?php

/**
 * Created by PhpStorm.
 * User: james
 * Date: 16/5/27
 * Time: 下午8:45
 */
namespace Drupal\admin_avatar\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Admin Avatar' block.
 *
 * @Block(
 *   id = "avatar_block",
 *   admin_label = @Translation("Custom: admin avatar")
 * )
 */
class AvatarBlock extends BlockBase{
  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#theme' => 'admin_avatar',
      '#avatar' => '666',
    );
  }
}