

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP POST Method</title>
</head>
<body>
<?php
if(isset($_POST["name"])){
    echo "<p>Your Name is " . $_POST["name"] . "</p>";
}
?>

<form method="post" action="post.php">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <input type="submit" value="Submit">
</form>

</body>
</html>