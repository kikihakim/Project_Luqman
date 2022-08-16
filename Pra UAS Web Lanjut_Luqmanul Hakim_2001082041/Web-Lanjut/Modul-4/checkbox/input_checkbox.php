<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>CHECK BOX</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name="author" content="Luqmanul Hakim" />
    <meta name="description" content="Form" />
</head>
<body>
    <form action="proses.php" method="POST">
        <h2>Pilih Band Favorit Anda :</h2>
        <input type="checkbox" name="Band01" value="Padi" checked> Padi<br>
        <input type="checkbox" name="Band02" value="Sheila On 7"> Sheila On 7<br>
        <input type="checkbox" name="Band03" value="Dewa 19"> Dewa 19<br>
        <input type="checkbox" name="Band04" value="Ungu"> Ungu<br>
        <input type="submit" name="Submit" value="Pilih">
    </form>
</body>
</html>