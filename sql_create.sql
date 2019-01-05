CREATE TABLE categories
(
category_id   BIGINT       NOT NULL PRIMARY KEY AUTO_INCREMENT,
name          varchar(100) NOT NULL,
description   TEXT         NOT NULL
)



CREATE TABLE products
(
product_id    BIGINT       NOT NULL PRIMARY KEY AUTO_INCREMENT,
name          varchar(100) NOT NULL,
description   TEXT 	       NOT NULL,
price         DECIMAL      NOT NULL,
category_id   BIGINT       NOT NULL,
FOREIGN KEY (category_id) REFERENCES categories(category_id)
)


