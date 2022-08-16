<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Radio</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name="author" content="Luqmanul Hakim" />
    <meta name="description" content="Form" />
</head>
<body>
    <form action="proses.php" method="POST">
        <h2>Pilih Juarusan Anda :</h2>
        <input type="radio" name="jurusan" value="TI">Teknologi Informasi <br>
        <input type="radio" name="jurusan" value="Elektro" checked>Elektro <br>
        <input type="radio" name="jurusan" value="Akuntansi">Akuntansi <br>

        <h2>Pilih Prodi         :</h2>
        <input type="radio" name="prodi" value="TRPL" checked>TRPL <br>
        <input type="radio" name="prodi" value="MI">Manajemen Informatika <br>
        <input type="submit" name="Submit" value="Daftar">
    </form>
</body>
</html>