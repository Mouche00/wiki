DROP DATABASE IF EXISTS wiki;
CREATE DATABASE IF NOT EXISTS wiki;
USE wiki;

CREATE TABLE IF NOT EXISTS roles (
  name VARCHAR(255)  PRIMARY KEY
);

CREATE TABLE IF NOT EXISTS users (
  id INT(10) AUTO_INCREMENT PRIMARY KEY,
  fullname VARCHAR(255) ,
  picture VARCHAR(255) ,
  username VARCHAR(255) UNIQUE ,
  email VARCHAR(255) UNIQUE ,
  password VARCHAR(255) 
);

CREATE TABLE IF NOT EXISTS rolesOfUser (
  roles_id VARCHAR(255) ,
  users_id INT(10) ,
  FOREIGN KEY (roles_id) REFERENCES roles(name) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (users_id) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS categories (
  id INT(10) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) UNIQUE ,
  description VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS wikis (
  id INT(10) AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) ,
  content LONGTEXT ,
  picture VARCHAR(255) ,
  dateCreated TIMESTAMP ,
  dateModified TIMESTAMP ,
  archived ENUM('1','0') DEFAULT '0',
  category_id INT(10) ,
  user_id INT(10) ,
  FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS tags (
  id INT(10) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) UNIQUE 
);

CREATE TABLE IF NOT EXISTS tagsOfWiki (
  tags_id INT(10) ,
  wikis_id INT(10) ,
  FOREIGN KEY (tags_id) REFERENCES tags(id) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (wikis_id) REFERENCES wikis(id) ON DELETE CASCADE ON UPDATE CASCADE
);

INSERT INTO roles VALUES ("admin");
INSERT INTO roles VALUES ("author");

INSERT INTO users (fullname, picture, username, email, password) VALUES ("Alex Kister", "admin.jpg", "alexei", "alexei@gmail.com", "$2y$10$Lg6NL1lzO08isblJ/NEHzuKnMqATylQ008sjwtDUqp7zc0I8l9Dsa");

SET @id = LAST_INSERT_ID();

INSERT INTO rolesOfUser VALUES ("admin", @id);

