<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/submit">
    @csrf
    <label name='name'>Vārds:</label>
    <input type="text" name='name'>
    <label name='email'>E-pasts</label>
    <input type='text' name='email'>
    <button type="submit">Send</button>
</form>
</body>
</html>