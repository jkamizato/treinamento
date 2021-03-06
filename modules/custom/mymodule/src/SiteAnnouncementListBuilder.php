<?php
/**
 * Created by PhpStorm.
 * User: julio
 * Date: 3/3/17
 * Time: 2:30 PM
 */

namespace Drupal\mymodule;


use Drupal\Core\Config\Entity\ConfigEntityListBuilder;
use Drupal\Core\Entity\EntityInterface;

class SiteAnnouncementListBuilder extends ConfigEntityListBuilder{
  public function buildHeader() {
    $header['label'] = t('Label');
    return $header + parent::buildHeader(); // TODO: Change the autogenerated stub
  }

  public function buildRow(EntityInterface $entity) {
    $row['label'] = $entity->label();
    return parent::buildRow($entity); // TODO: Change the autogenerated stub
  }


}