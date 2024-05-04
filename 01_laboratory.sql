-- Creating a Database
CREATE DATABASE IF NOT EXISTS Company;

-- Selecting a Database
USE Company;

-- Creating a Table
CREATE TABLE IF NOT EXISTS Employees (
    EmployeeID INT PRIMARY KEY,
    FirstName VARCHAR(20),
    LastName VARCHAR(20),
    Age INT,
    Department VARCHAR(50)
);

-- Inserting Data into the Table
INSERT INTO Employees (EmployeeID, FirstName, LastName, Age, Department) VALUES
(1, 'Beetle', 'Juice', 30, 'HR'),
(2, 'Taph', 'Taph', 25, 'Finance'),
(3, 'Vladimir', 'Poohthin', 35, 'IT'),
(4, 'Zarl', 'Mackerburg', 28, 'Operations'),
(5, 'Bustine', 'Jieber', 32, 'Marketing');

-- Viewing Data
SELECT * FROM Employees;

-- Updating Data
UPDATE Employees SET Department = 'Marketing' WHERE EmployeeID = 2;

-- Deleting Data
DELETE FROM Employees WHERE EmployeeID = 3;

-- Dropping the Table
DROP TABLE IF EXISTS Employees;
