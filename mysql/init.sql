CREATE DATABASE rickyphpdg;

USE rickyphpdg;

CREATE TABLE cars (
    license_plate VARCHAR(20) NOT NULL,
    license_state VARCHAR(3) NOT NULL,
    vin VARCHAR(50) NULL,
    year VARCHAR(4) NULL,
    colour VARCHAR(20) NULL,
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
    price decimal NOT NULL,
    repairer VARCHAR(50) NOT NULL,
    overview_of_work VARCHAR(200) NOT NULL,
    created DATETIME,
    modified DATETIME,
    FOREIGN KEY fk_car (license_plate, license_state) REFERENCES cars(license_plate, license_state)
) 

INSERT INTO cars
VALUES
('DTR123', 'NSW', '5TDBW5G16BS451999', '2024', 'Black', 'Mazda', 'CX-3', NOW(), NOW());


insert into quotes (license_plate, license_state, price, repairer, overview_of_work, created, modified) values ('DTR123', 'NSW', 850, 'Jake', '4x tire change', NOW(), NOW());
