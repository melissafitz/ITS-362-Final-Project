CREATE TABLE Customers(
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

CREATE TABLE Foods(
    FoodID INT(10) NOT NULL,
    FoodName VARCHAR(100),
    FoodType VARCHAR(100),
    FoodDescription VARCHAR(200),
    FoodCost DECIMAL(3,2),
    FoodImg VARCHAR(20),
    PRIMARY KEY (FoodID)
);

CREATE TABLE Drinks(
    DrinkID INT(10) NOT NULL,
    DrinkName VARCHAR(100),
    DrinkType VARCHAR(100),
    DrinkDescription VARCHAR(200),
    DrinkCost DECIMAL(3,2),
    DrinkImg VARCHAR(20),
    PRIMARY KEY (DrinkID)
);

CREATE TABLE Orders(
    OrderID INT(10) NOT NULL,
    CustomerID INT(10) NOT NULL,
    OrderTotal DECIMAL(7,2),
    OrderDate DATETIME,
    FOREIGN KEY (CustomerID) REFERENCES Customer(CustomerID)
);

CREATE TABLE Users(
    UserID INT(11) NOT NULL,
    Username VARCHAR(50) NOT NULL,
    Password VARCHAR(255) NOT NULL,
    DateRegistered DATETIME DEFAULT CURRENT_TIMESTAMP
);