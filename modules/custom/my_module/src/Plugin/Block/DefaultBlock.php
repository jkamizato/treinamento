<?php

namespace Drupal\my_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'DefaultBlock' block.
 *
 * @Block(
 *  id = "default_block",
 *  admin_label = @Translation("Default block"),
 * )
 */
class DefaultBlock extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
         'page' => $this->t(''),
        ] + parent::defaultConfiguration();

 }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['page'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Page'),
      '#description' => $this->t(''),
      '#default_value' => $this->configuration['page'],
      '#maxlength' => 64,
      '#size' => 64,
      '#weight' => '0',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['page'] = $form_state->getValue('page');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $page = $this->configuration['page'];
    $build['default_block_page']['#markup'] = '<div class="fb-page" data-href="https://www.facebook.com/' . $page . '" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/' . $page . '" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/' . $page . '">My Custom Block</a></blockquote></div>';

    return $build;
  }

}
