<?php

namespace Drupal\mymodule;

/**
 * Created by PhpStorm.
 * User: julio
 * Date: 3/3/17
 * Time: 12:02 PM
 */

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Language\LanguageInterface;
use Drupal\Component\Utility\Unicode;

class SiteAnnouncementForm extends EntityForm {
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);
    $entity = $this->entity;
    $form['label'] = [
      '#type'=> 'textfield',
      '#title' => 'Label',
      '#required' => TRUE,
      '#default_value' => $entity->label(),
    ];

    $form['message'] = [
      '#type' => 'textarea',
      '#title' => t('Message'),
      '#required' => TRUE,
      '#default_value' => $entity->getMessage(),
    ];
    return $form;
  }

  public function save(array $form, FormStateInterface $form_state) {
    $entity = $this->entity;
    $is_new = !$entity->getOriginalId();
    if ($is_new) {
      $machine_name = \Drupal::transliteration()->transliterate($entity->label(),
        LanguageInterface::LANGCODE_DEFAULT, '_');
      $entity->set('id', Unicode::strtolower($machine_name));
    }

    $entity->save($form, $form_state);

    //$form_state->setRedirectUrl($this->entity->toUrl('collection'));
  }
}
