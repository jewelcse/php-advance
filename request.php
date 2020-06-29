

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP REQUEST Method</title>
</head>
<body>
<?php
if(isset($_REQUEST["name"])){
    echo "<p>Your Name is " . $_REQUEST["name"] . "</p>";
}
?>

<form method="post" action="request.php">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <input type="submit" value="Submit">
</form>

</body>
</html>