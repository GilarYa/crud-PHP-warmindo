<?php

session_start();

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yakin keluar?</title>
</head>

<body>
    <a href="index.php">keluar</a><br><br>
    <a href="timeline.php">gajadi kak...</a><br><br>
</body>

</html>