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
    echo $searchTerm;

    if (!$searchType || !$searchTerm) {
        echo '<p>You have not entered search details.<br /> Please go back and try again.</p>';
        exit;
    }

    switch ($searchType) {
        case 'Title':
        case 'Author':
        case 'ISBN':
            break;
        default:
            echo '<p>That is not a valid search type. <br /> Please go back and try again.</p>';
            exit;
    }

    $db = new mysqli('localhost', 'root', 'assapass', 'books');
    if (mysqli_connect_errno()) {
        echo '<p>Error: Could not connect to database.<br /> Please try again later.';
        exit;
    }

    $query = "SELECT ISBN, Author, Title, Price FROM Books WHERE $searchType LIKE ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param('s', $searchTerm);
    $stmt->execute();
    $stmt->store_result();

    $stmt->bind_result($isbn, $author, $title, $price);

    echo "<p>Number of books found: ".$stmt->num_rows."</p>";

    while ($stmt->fetch()) {
        echo "<p><strong>Title: ".$title."</strong>";
        echo "<br />Author: ".$author;
        echo "<br />ISBN ".$isbn;
        echo "<br />Price: \$".number_format($price, 2)."</p>";
    }

    $stmt->free_result();
    $db->close();
    ?>
</body>
</html>
