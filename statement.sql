CREATE DATABASE moneyz;

USE moneyz;

CREATE TABLE Users(
    id int NOT NULL AUTO_INCREMENT,
    Username VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL,
    Created_at DATETIME NOT NULL,
    Updated_at DATETIME NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE Moneyz(
    id int NOT NULL AUTO_INCREMENT,
    User_id int NOT NULL,
    Moneyz int NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (User_id) REFERENCES Users (id)
);