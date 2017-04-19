# Basic syntax to create a function

DELIMITER //

CREATE FUNCTION Add_Tax (Price FLOAT) RETURNS FLOAT NO SQL
  RETURN Price * 11;

//

DELIMITER ;
