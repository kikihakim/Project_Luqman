<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>COMBO BOX</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name="author" content="Luqmanul Hakim" />
    <meta name="description" content="Form" />
</head>
<body>
    <form action="proses.php" method="POST">
        <h2>Pilih Film Kartun Favorit Anda :</h2>
        <select name="kartun">
            <option value="Spongebob">Spongebob</option>
            <option value="Sinchan">Sinchan</option>
            <option value="Conan" selected>Conan</option>
            <option value="Doraemon" disabled>Doraemon</option>
            <option value="Dragon Ball">Dragon Ball</option>
            <option value="Naruto">Naruto</option>
        </select>
        <input type="submit" name="Submit" value="Pilih">
    </form>
</body>
</html>