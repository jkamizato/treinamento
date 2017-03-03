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

class SiteAnnouncementForm extends EntityForm {
  public function form(array $form, FormStateInterface $form_state) {
    return parent::form($form, $form_state);
  }

  public function save(array $form, FormStateInterface $form_state) {
    return parent::save($form, $form_state);
  }


}
