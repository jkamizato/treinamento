<?php

namespace Drupal\mymodule\Entity;
use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * @ConfigEntityType(
 *   id = "announcement",
 *   label = @Translation("Site Announcement"),
 *   config_prefix = "announcement",
 *   entity_keys = {
 *    "id" = "id",
 *    "label" = "label"
 *    },
 *   config_export = {
 *    "id",
 *    "label",
 *    "message"
 *    },
 *   handlers = {
 *    "list_builder" = "Drupal\mymodule\SiteAnnouncementListBuilder",
 *    "form" = {
 *      "default" = "Drupal\mymodule\SiteAnnouncementForm",
 *      "add" = "Drupal\mymodule\SiteAnnouncementForm",
 *      "edit" = "Drupal\mymodule\SiteAnnouncementForm",
 *      "delete" = "Drupal\Core\Entity\EntityDeleteForm"
 *    }
 *   }
 * )
 */
class SiteAnnouncement extends ConfigEntityBase implements SiteAnnouncementInterface {

  /**
   * @var string
   */
  protected $message;

  /**
   * {@inheritdoc|}
   */
  public function getMessage() {
    return $this->message;
  }

}