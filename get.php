

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP GET Method</title>
</head>
<body>
<?php
if(isset($_GET["name"])){
    echo "<p>Your Name is " . $_GET["name"] . "</p>";
}
?>

<form method="get" action="get.php">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <input type="submit" value="Submit">
</form>

</body>
</html>