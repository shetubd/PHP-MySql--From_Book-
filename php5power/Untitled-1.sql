

DROP TABLE IF EXISTS `time`;
CREATE TABLE IF NOT EXISTS `time` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255),
  `date` date,
  `time` time,
  PRIMARY KEY `pk_id`(`id`)
) ENGINE = InnoDB;


