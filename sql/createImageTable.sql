DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
    `id` int(1) NOT NULL,
    `imagepath` varchar(50) NOT NULL
);

ALTER TABLE `images` ADD PRIMARY KEY(`id`);

ALTER TABLE `images` CHANGE `id` `id`INT(1) NOT NULL AUTO_INCREMENT;