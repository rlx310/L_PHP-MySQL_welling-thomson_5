<!DOCTYPE html>
<html>
<head>
    <title>Book-O-Rama Search Results</title>
</head>
<body>
    <h1>Book-O-Rama Search Results</h1>
    <?php
    $searchType = $_POST['searchType'];
    $searchTerm = trim($_POST['searchTerm']);
    $searchTerm = "%{$searchTerm}%";

    if (!$searchType || !$searchTerm) {
        echo '<p>You have not entered search details.<br />Please go back an try again.</p>';
        exit;
    }

    switch ($searchType) {
        case 'Title':
        case 'Author':
        case 'ISBN':
            break;
        default:
            echo '<p>That is no a valid search type.<br />Please go back and try again.</p>';
            exit;
    }

    $user = 'root';
    $pass = 'assapass';
    $host = 'localhost';
    $db_name = 'books';

    $dsn = "mysql:host=$host;dbname=$db_name";

    try {
        $db = new PDO($dsn, $user, $pass);

        $query = "SELECT ISBN, Author, Title, Price FROM Books WHERE $searchType LIKE :searchTerm";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':searchTerm', $searchTerm);
        $stmt->execute();

        echo "<p>Number of books found: ".$stmt->rowCount()."</p>";

        while($result = $stmt->fetch(PDO::FETCH_OBJ)) {
            echo "<p><strong>Title: ".$result->Title."</strong>";
            echo "<br />Author: ".$result->Author;
            echo "<br />ISBN: ".$result->ISBN;
            echo "<br />Price: \$".number_format($result->Price, 2)."</p>";
        }

        $db = NULL;
    } catch (PDOException $e) {
        echo "Error: ".$e->getMessage();
        exit;
    }
    ?>
</body>
</html>
