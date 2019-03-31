CREATE TABLE Customer(
    CustomerID INT(10) NOT NULL,
    CustomerFName VARCHAR(100),
    CustomerLName VARCHAR(100),
    CreditCardNumber INT(25),
    PhoneNumber INT(10),
    Email VARCHAR(80),
    Address1 VARCHAR(100),
    Address2 VARCHAR(100),
    City VARCHAR(60),
    State CHAR(2),
    ZipCode INT(5),
    PRIMARY KEY (CustomerID)
);