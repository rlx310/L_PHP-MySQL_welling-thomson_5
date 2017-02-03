<!DOCTYPE html>
<html>
<head>
    <title>Book-O-Rama Search Results</title>
</head>
    <h1>Book-O-Rama Search Results</h1>
    <?php
    $searchType = $_POST['searchType'];
    $searchTerm = "%{$_POST['searchTerm']}%";

    if (!$searchType || !$searchTerm) {
        echo "<p>You have not entered search details.<br /> Please go back and try again.</p>";
        exit;
    }
    ?>
</html>