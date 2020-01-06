--
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ユーザID',
  `user_name` varchar(20) NOT NULL COMMENT 'ユーザ名',
  `password` varchar(40) NOT NULL COMMENT 'パスワード',
  `created_at`  DATETIME COMMENT '作成日',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name_index` (`user_name`)
) ENGINE=InnoDB;

--
DROP TABLE IF EXISTS `following`;
CREATE TABLE `following` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ユーザID',
  `following_id` int(10) unsigned NOT NULL COMMENT 'フォロワーID',
  PRIMARY KEY (`user_id`, `following_id`)
) ENGINE=InnoDB;

--
DROP TABLE IF EXISTS `status`;
CREATE TABLE `status` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'DBID',
  `user_id` int(10) unsigned NOT NULL COMMENT 'ユーザID',
  `body` varchar(100) NOT NULL COMMENT '本文',
  `created_at`  DATETIME COMMENT '作成日',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id_index` (`user_id`)
) ENGINE=InnoDB;
