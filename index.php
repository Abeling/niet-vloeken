<?php
// Get username, password from database
include 'config.php';
// Make database connection
include 'database.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form action="action.php" method="post">
        <input type="text" name="name" placeholder="Name"><br /><br />
        <textarea name="message" placeholder="Type your message..." rows="4" cols="25"></textarea>
        <input type="submit" value="submit">
    </form>
<?php
while ($row = $stmt->fetch()) {
    echo '<h1>' . $row['naam'] . '</h1>';
    echo '<p>' . $row['message'] . '</p>';
}
?>
</body>
</html>