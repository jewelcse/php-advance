


<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP GET Method</title>
</head>
<body>
<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];
    echo "<p>User-id Get from get2.php file is " . $id . "</p>";
}
?>



</body>
</html>