CREATE DATABASE rickyphpdg;

USE rickyphpdg;

CREATE TABLE cars (
    license_plate VARCHAR(20) NOT NULL,
    license_state VARCHAR(3) NOT NULL,
    vin VARCHAR(50) NULL,
    year VARCHAR(4) NULL,
    colour VARCHAR(20)) NULL,
    make VARCHAR(20) NULL,
    model VARCHAR(20) NULL,
    created DATETIME,
    modified DATETIME,
    PRIMARY KEY (license_plate, license_state)
);

CREATE TABLE quotes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    license_plate VARCHAR(20) NOT NULL,
    license_state VARCHAR(3) NOT NULL,
    price INT NOT NULL,
    repairer VARCHAR(255) NOT NULL,
    overviewOfWork VARCHAR(191) NOT NULL,
    created DATETIME,
    modified DATETIME,
    FOREIGN KEY fk_car (license_plate, license_state) REFERENCES car(license_plate, license_state)
) 

INSERT INTO cars
VALUES
('DTR123', 'NSW', '5TDBW5G16BS451999', '2024', 'Black', 'Mazda', 'CX-3', NOW(), NOW());
