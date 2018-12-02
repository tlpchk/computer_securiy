<?php
    session_start();

    require_once("server.php");
    require_once('db_get.php');
    require_once('errors.php');

    $db = mysqli_connect('127.0.0.1', 'root', '','mybank');
    $OK = $_SESSION['username'];



    function transfer_form(){
        global $TRANSFER_FORM, $db;
        $data = getColumnsByUsername($db, $_SESSION['username'],["username","amount"]);
        $account = $data[0];
        $amount = sprintf("%.2f", floatval($data[1]));

        return (string)str_replace(["{{ERRORS}}","{{ACCOUNT}}","{{AMOUNT}}"],[getErrors(),$account,$amount],$TRANSFER_FORM);
    }



$TRANSFER_FORM=<<<EOT
<div class="header">
    <h2>Wyślij przelew</h2>
</div>

<form method="post" action="confirm.php">
    
    {{ERRORS}}
    
    <div class="input-group">
        <label>Twój razhunek</label>
        <p>{{ACCOUNT}} : {{AMOUNT}} PLN</p>
    </div>
    <div class="input-group">
        <label>Imię odbiorcy</label>
        <input type="text" name="receiver" required>
    </div>
    <div class="input-group">
        <label>Tytułem</label>
        <input type="text" name="title" required>
    </div>
    
    <div class="input-group">
        <label>Kwota</label>
        <input type="number" name="amount" step="0.01" placeholder= "0.00" required>
    </div>

    <div class="input-group">
        <label>Potwierdź hasło</label>
        <input type="password" name="password" required>
    </div>
    
    <div class="input-group">
        <button type="submit" class="btn" name="transfer">Wyślij</button>
    </div>
</form>
EOT
?>

<!DOCTYPE html>
<html>
<head>
	<title>Przelew</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php

if ($OK){
    ECHO transfer_form();
}else{
    ECHO "PLEASE, LOG IN";
}
?>

</body>
</html>
