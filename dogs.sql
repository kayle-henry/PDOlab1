drop database if exists dogsDB;
drop user if exists 'doguser'@'localhost';
create database dogsDB;
use dogsDB;

create user 'doguser'@'localhost' identified by 'dogpass';
grant all on dogsDB.* to 'doguser'@'localhost';

USE dogsDB;

CREATE TABLE dogs (
    dogID INT AUTO_INCREMENT PRIMARY KEY,
    ownerName VARCHAR(100) NOT NULL,
    dogName VARCHAR(100) NOT NULL,
    dogBreed VARCHAR(100) NOT NULL,
    dogColor VARCHAR(50) NOT NULL,
    dogAge INT NOT NULL
);

INSERT INTO dogs (ownerName, dogName, dogBreed, dogColor, dogAge) VALUES
('John Doe', 'Buddy', 'Golden Retriever', 'Golden', 3),
('Jane Smith', 'Bella', 'Labrador Retriever', 'Black', 5),
('Mike Johnson', 'Charlie', 'Beagle', 'Tricolor', 4),
('Sarah Lee', 'Daisy', 'Poodle', 'White', 2),
('Emily Brown', 'Max', 'German Shepherd', 'Tan and Black', 6),
('Chris Evans', 'Luna', 'Border Collie', 'Black and White', 4),
('Anna Taylor', 'Milo', 'Cocker Spaniel', 'Golden', 3),
('Tom Harris', 'Lucy', 'Shih Tzu', 'White and Brown', 7),
('Laura Wilson', 'Rocky', 'Bulldog', 'Brindle', 2),
('David Martin', 'Sadie', 'Boxer', 'Fawn', 5),
('Olivia Davis', 'Cooper', 'Australian Shepherd', 'Blue Merle', 3),
('James Moore', 'Zoey', 'Rottweiler', 'Black and Tan', 4),
('Sophia Clark', 'Oscar', 'Dachshund', 'Brown', 8),
('Liam Martinez', 'Maggie', 'Siberian Husky', 'Gray and White', 2),
('Isabella White', 'Finn', 'Cavalier King Charles Spaniel', 'Ruby', 1);
