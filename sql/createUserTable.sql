DROP TABLE IF EXISTS `users`;

CREATE TABLE `users`(
    `id` int(4) ZEROFILL  NOT NULL AUTO_INCREMENT,
    `firstname` varchar(20) NOT NULL,
    `lastname`varchar(30) NOT NULL,
    `username`varchar(50) NOT NULL,
    `street` varchar(30) NOT NULL,
    `number`int(4) NOT NULL,
    `plz` varchar(5) NOT NULL,
    `city` varchar(30) NOT NULL,
    PRIMARY KEY (`id`) 
);