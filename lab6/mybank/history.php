<?php
session_start();

require_once('server.php');

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
    <h2>History</h2>
</div>

<?php ECHO getHistory()?>


</body>
</html>

