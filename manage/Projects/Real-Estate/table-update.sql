#Project table updated
ALTER TABLE `2_real_project`  ADD `browsertitle` TEXT NOT NULL AFTER `title`,  ADD `metakey` TEXT NOT NULL AFTER `browsertitle`,  ADD `metadesc` TEXT NOT NULL AFTER `metakey`;


#Property Table updated - browsertitle column added
ALTER TABLE  `2_real_property` ADD  `browsertitle` TEXT NOT NULL AFTER  `title`

#2_real_response updated - domain[text], status[defaultvalue], reply[defaultvalue], phone[int(55)]

CREATE TABLE IF NOT EXISTS `2_real_response` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(55) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` enum('New','Read','Delete') NOT NULL DEFAULT 'New',
  `reply` enum('Yes','No') NOT NULL DEFAULT 'No',
  `reply_msg` text NOT NULL,
  `respo_for` varchar(255) NOT NULL,
  `domain` text NOT NULL,
  `date` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=104 ;