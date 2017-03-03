<?php
/**
 * @file Contains \Drupal\module\Entity\SiteAnnouncementInterface
 */

namespace Drupal\mymodule\Entity;

use \Drupal\Core\Config\Entity\ConfigEntityInterface;

/**
 * Interface SiteAnnouncementInterface.
 */
interface SiteAnnouncementInterface extends ConfigEntityInterface {

  /**
   * Gets return the message.
   * @return string
   */
  public function getMessage();
}