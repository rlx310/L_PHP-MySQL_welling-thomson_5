USE books;

INSERT INTO Customers VALUES
  (1, 'Julie Smith', '25 Oak Street', 'Airport West'),
  (2, 'Alan Wong', '1/47 Haines Avenue', 'Box Hill'),
  (3, 'Michelle Arthur', '357 North Road', 'Yarraville');

INSERT INTO Books VALUES
  ('0-672-31697-8', 'Michael Morgan', 'Java 2 for Professional Developers', 34.99),
  ('0-672-31745-1', 'Thomas Down', 'Installing Debian GNU/Linux', 24.99),
  ('0-672-31509-2', 'Pruitt, et al.', 'Teach Yourself GIMP in 24 Hours', 24.99),
  ('0-672-31769-9', 'Thomas Schenk', 'Caldera OpenLinux System Administration Unleashed', 49.99);

INSERT INTO Orders VALUES
  (NULL, 3, 69.98, '2007-04-02'),
  (NULL, 1, 49.99, '2007-04-15'),
  (NULL, 2, 74.98, '2007-04-19'),
  (NULL, 3, 24.99, '2007-05-01');

INSERT INTO Order_Items VALUES
  (1, '0-672-31697-8', 2),
  (2, '0-672-31769-9', 1),
  (3, '0-672-31769-9', 1),
  (3, '0-672-31509-2', 1),
  (4, '0-672-31745-1', 3);

INSERT INTO Book_Reviews VALUES
  ('0-672-31697-8', 'The Morgan book is clearly written and goes well beyond most of the basic Java books out there.');



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

# SELECT Name
# FROM Customers
# LIMIT 2, 3;

# SELECT CustomerID, Amount
# FROM Orders
# WHERE Amount = (SELECT MAX(Amount) FROM Orders);

# SELECT CustomerID, Amount
# FROM Orders
# ORDER BY Amount DESC
# LIMIT 1;

# SELECT ISBN, Title
# FROM Books
# WHERE NOT EXISTS
# (SELECT * FROM Order_Items WHERE Order_Items.ISBN = Books.ISBN);

# SELECT * FROM
#   (SELECT CustomerID, Name FROM Customers WHERE City = 'Box Hill')
# AS box_hill_customers;

UPDATE Books
SET Price = Price * 1.1;