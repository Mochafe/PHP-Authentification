CREATE DATABASE IF NOT EXISTS "exo";
USE "exo";

CREATE TABLE user(
    user_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_firstname VARCHAR(50) NOT NULL,
    user_lastname VARCHAR(50) NOT NULL,
    user_mail VARCHAR(320) NOT NULL UNIQUE CHECK (user_mail RLIKE '^.+@.+\..+$'),
    user_password VARCHAR(60)
);