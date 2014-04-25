#Project table updated
ALTER TABLE `2_real_project`  ADD `browsertitle` TEXT NOT NULL AFTER `title`,  ADD `metakey` TEXT NOT NULL AFTER `browsertitle`,  ADD `metadesc` TEXT NOT NULL AFTER `metakey`;


#Property Table updated - browsertitle column added
ALTER TABLE  `2_real_property` ADD  `browsertitle` TEXT NOT NULL AFTER  `title`

#2_real_response updated - domain[text], status[defaultvalue], reply[defaultvalue], phone[int(55)]

ALTER TABLE `2_real_response` CHANGE `phone` `phone` INT(55) NOT NULL, CHANGE `reply` `reply` ENUM('Yes','No') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'No', CHANGE `domain` `domain` TEXT NOT NULL;