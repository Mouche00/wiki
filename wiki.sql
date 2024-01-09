DROP DATABASE IF EXISTS wiki;
CREATE DATABASE IF NOT EXISTS wiki;
USE wiki;

CREATE TABLE IF NOT EXISTS role (
  nameRole VARCHAR(255) NOT NULL PRIMARY KEY
);

CREATE TABLE IF NOT EXISTS user (
  idUser INT(10) AUTO_INCREMENT PRIMARY KEY,
  fullName VARCHAR(255) NOT NULL,
  pictureUser VARCHAR(255) NOT NULL,
  username VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS rolesOfUser (
  nameRole VARCHAR(255) NOT NULL,
  idUser INT(10) NOT NULL,
  FOREIGN KEY (nameRole) REFERENCES role(nameRole) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (idUser) REFERENCES user(idUser) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS category (
  idCategory INT(10) AUTO_INCREMENT PRIMARY KEY,
  nameCategory VARCHAR(255) NOT NULL,
  description VARCHAR(255) NOT NULL,
  pictureCategory VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS wiki (
  idWiki INT(10) AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  content LONGTEXT NOT NULL,
  pictureWiki VARCHAR(255) NOT NULL,
  dateCreated TIMESTAMP NOT NULL,
  dateModified TIMESTAMP NOT NULL,
  archived ENUM('1','0') NOT NULL,
  idCategory INT(10) NOT NULL,
  idUser INT(10) NOT NULL,
  FOREIGN KEY (idCategory) REFERENCES category(idCategory) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (idUser) REFERENCES user(idUser) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS tag (
  idTag INT(10) AUTO_INCREMENT PRIMARY KEY,
  nameTag VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS tagsOfWiki (
  idTag INT(10) NOT NULL,
  idWiki INT(10) NOT NULL,
  FOREIGN KEY (idTag) REFERENCES tag(idTag) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (idWiki) REFERENCES wiki(idWiki) ON DELETE CASCADE ON UPDATE CASCADE
);

INSERT INTO role VALUES ("admin");
INSERT INTO role VALUES ("author");

INSERT INTO user (fullName, pictureUser, username, email, password) VALUES ("Alex Kister", "admin.jpg", "alexei", "alexei@gmail.com", "$2y$10$Lg6NL1lzO08isblJ/NEHzuKnMqATylQ008sjwtDUqp7zc0I8l9Dsa");

SET @id = LAST_INSERT_ID();

INSERT INTO rolesOfUser VALUES ("admin", @id);

