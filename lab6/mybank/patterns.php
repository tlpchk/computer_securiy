<?php

$TRANSFER_FORM= <<<EOT
<div class="header">
    <h2>Wyślij przelew</h2>
</div>

<form method="post" action="transfer.php">

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
        <button type="submit" class="btn" name="verify">Wyślij</button>
    </div>
</form>
EOT;


$VERIFICATION=<<<EOT
<div class="header">
    <h2>Potwierdzenie</h2>
</div>


<form name="hidden_form"  method="post"   action="transfer.php">
    <p>Twoje konto: {{SENDER}}</p>
    <p>Odbiorca: {{RECEIVER}}</p>
    <p>Tytułem: {{TITLE}}</p>
    <p>Kwota: {{AMOUNT}}</p>

    <input type="hidden"  name="receiver" value = "{{RECEIVER}}" id = "weakness">
    <input type="hidden"  name="title"    value = "{{TITLE}}">
    <input type="hidden"  name="amount"   value = "{{AMOUNT}}">
    
    <div class="input-group">
        <label>Potwierdź hasło</label>
        <input type="password" name="password" required>
    </div>
    
    <div class="input-group">
        <button type="submit" class="btn" name="transfer">Wyślij</button>
    </div>
</form>
EOT;

$CONFIRMATION=<<<EOT
<div class="header">
    <h2>Potwierdzenie</h2>
</div>

<div class="content">

    {{MSG}}

    <p>Odprawca:{{SENDER}}</p>
    <p>Odbiorca: {{RECEIVER}}</p>
    <p>Tytułem: {{TITLE}}</p>
    <p>Kwota: {{AMOUNT}} PLN</p>
</div>
EOT;


$COMPLETE_TRANSACTION=<<<EOT
<div class="success">
    <p>Transakcja została wykonana</p>
</div>
EOT;

?>