<?php
session_start();

require_once('server.php');

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script >
</head>
<body>

<div class="header">
    <h2>Historia</h2>
</div>

<div class="content">
<?php ECHO getHistory()?>
</div>

</body>
</html>

