# SELECT Name, City
# FROM Customers;

# SELECT *
# FROM Order_Items;

# SELECT *
# FROM Orders
# WHERE CustomerID = 3;

# SELECT *
# FROM Orders
# WHERE CustomerID = 3 OR CustomerId = 4;

# SELECT Orders.OrderID, Orders.Amount, Orders.Date
# FROM Customers, Orders
# WHERE Customers.Name = 'Julie Smith' and Customers.CustomerID = Orders.CustomerID;

# SELECT Customers.Name
# FROM Customers, Orders, Order_Items, Books
# WHERE Customers.CustomerID = Orders.CustomerID
# AND Orders.OrderID = Order_Items.OrderID
# AND Order_Items.ISBN = Books.ISBN
# AND Books.Title LIKE '%Java%';

# SELECT Customers.CustomerID, Customers.Name, Orders.OrderID
# FROM Customers LEFT JOIN Orders ON Customers.CustomerID = Orders.CustomerID;

# INSERT INTO Customers VALUES
#   (NULL, 'George Napolitano', '177 Melbourne Road', 'Coburg');

# SELECT Customers.CustomerID, Customers.Name
# FROM Customers LEFT JOIN Orders USING (CustomerID)
# WHERE Orders.OrderId IS NULL;

# SELECT C.Name
# FROM Customers AS C, Orders AS O, Order_Items AS OI, Books AS B
# WHERE C.CustomerID = O.CustomerID
# AND O.OrderID = OI.OrderID
# AND OI.ISBN = B.ISBN
# AND B.Title LIKE '%Java%';

# SELECT C1.NAME, C2.Name, C1.City
# FROM Customers AS C1, Customers AS C2
# Where C1.City = C2.City
# AND C1.Name != C2.Name;

# SELECT Name, Address
# FROM Customers
# ORDER BY Name;

# SELECT Name, Address
# FROM Customers
# ORDER BY Name ASC;

# SELECT Name, Address
# FROM Customers
# ORDER BY Name DESC;

# SELECT AVG(Amount)
# FROM Orders;

# SELECT CustomerID, AVG(Amount)
# FROM Orders
# GROUP BY CustomerID;

# SELECT CustomerID, AVG(Amount)
# FROM Orders
# GROUP BY CustomerID
# HAVING AVG(Amount) > 50;

# SELECT Name
# FROM Customers
# LIMIT 2;

# UPDATE Books
# SET Price = Price * 1.1;
#
# UPDATE Books
# SET Price = Price / 1.1;
#
# UPDATE Customers
# SET Address = '250 Olsens Road'
# WHERE CustomerID = 4;

# ALTER TABLE Customers MODIFY
#   Name CHAR(70) NOT NULL;

# ALTER TABLE Orders
#     ADD Tax FLOAT(6, 2) AFTER Amount;

# ALTER TABLE Orders
#     DROP Tax;

# DELETE FROM table;

# DELETE FROM Customers
# WHERE CustomerID = 5;

# DROP TABLE table;
#
# DROP DATABASE database;