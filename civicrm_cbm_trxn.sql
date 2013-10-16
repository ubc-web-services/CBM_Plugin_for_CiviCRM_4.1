delimiter $$

CREATE TABLE `civicrm_cbm_trxn` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cbm_unique_id` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `payment_num` int(10) unsigned DEFAULT NULL,
  `auth_url` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `auth_port` int(8) unsigned NOT NULL,
  `state` varchar(32) NOT NULL DEFAULT 'NEW',
  `amount` decimal(20,2) NOT NULL,
  `contact_id` int(10) unsigned NOT NULL,
  `contribution_id` int(10) unsigned NOT NULL,
  `contributionType_id` int(10) unsigned NOT NULL,
  `invoice_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `component` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'event',
  `qfkey` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `participant_id` int(10) unsigned DEFAULT NULL,
  `event_id` int(10) unsigned DEFAULT NULL,
  `membership_id` int(10) unsigned DEFAULT NULL,
  `notification_request_code` int(10) unsigned DEFAULT NULL,
  `continue_status_code` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_civicrm_cbm_trxn_contact_id` (`contact_id`),
  KEY `FK_civicrm_cbm_trxn_contribution_id` (`contribution_id`),
  KEY `FK_civicrm_cbm_trxn_participant_id` (`participant_id`),
  KEY `FK_civicrm_cbm_trxn_event_id` (`event_id`),
  CONSTRAINT `FK_civicrm_cbm_trxn_contact_id` FOREIGN KEY (`contact_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `FK_civicrm_cbm_trxn_contribution_id` FOREIGN KEY (`contribution_id`) REFERENCES `civicrm_contribution` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `FK_civicrm_cbm_trxn_event_id` FOREIGN KEY (`event_id`) REFERENCES `civicrm_event` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `FK_civicrm_cbm_trxn_participant_id` FOREIGN KEY (`participant_id`) REFERENCES `civicrm_participant` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci$$

