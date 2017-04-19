<!DOCTYPE html>
<html>
<head>
    <title>Uploading...</title>
</head>
<body>
    <h1>Uploading...</h1>
    <?php

    if ($_FILES['the_file']['error'] > 0) {
        echo "Problem: ";
        switch ($_FILES['the_file']['error']) {
            case 1:
                echo "File exceeded upload_max_filesize.";
                break;
            case 2:
                echo "File exceeded max_file_size.";
                break;
            case 3:
                echo "File only partially uploaded.";
                break;
            case 4:
                echo "No file uploaded.";
                break;
            case 6:
                echo "Cannot upload file: No temp directory specified.";
                break;
            case 7:
                echo "Upload failed: Cannot write to disk.";
                break;
        }
        exit;
    }

    if ($_FILES['the_file']['type'] != 'image/png') {
        echo "Problem: file is not a PNG image.";
        exit;
    }

    echo "File uploaded successfully.";

    echo "<p>You uploaded the following image:<br />";
    echo '<img src="/uploads/'.$_FILES['the_file']['name'].'"/>';
    ?>
</body>
</html>
