<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
    <h2>Potwierdzenie</h2>
</div>


<?php
ECHO "<p>Twoje konto:".$_SESSION['username']."<p>\n";
ECHO "<p>Odbiorca: ".$_POST['receiver']."<p>\n";
ECHO "<p>Tytułem: ".$_POST['title']."<p>\n";
ECHO "<p>Kwota: ".$_POST['amount']."<p>\n";
?>

<a onclick="submitHiddenForm()">Wyślij</a>

<script>
    function submitHiddenForm(){
        document.hidden_form.submit();
        console.log("ok");
    }
</script>
<form name="hidden_form"  method="post" action="transfer.php">
    <input type="hidden" name="receiver" value="<?php ECHO $_POST['receiver']?>">
    <input type="hidden" name="title" value="<?php ECHO $_POST['title']?>">
    <input type="hidden" name="amount" value="<?php ECHO  $_POST['amount']?>">
    <input type="hidden" name="password" value = "<?php ECHO  $_POST['password']?>">
    <input type="hidden" name="transfer">
</form>

</body>
</html>
