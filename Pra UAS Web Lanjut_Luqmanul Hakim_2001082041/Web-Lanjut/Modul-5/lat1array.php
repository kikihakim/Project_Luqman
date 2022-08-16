<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Tahun Ajaran</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name="author" content="Luqmanul Hakim" />
    <meta name="description" content="Form" />
</head>

<body>
    <form action="proses.php" method="POST">
        Tahun smt Ajaran :
        <?php
            $th_akademik = array ("2021/2022", "2020/2021");
            echo "<select name=\"thn_smt\">";
            foreach ($th_akademik as $key){
                # code
                echo "<option value='$key'>$key</option>";
            }
            echo "</select>";
        ?>
        <select name="semester">
            <?php
            $semester = array ("Ganjil", "Genap");
            foreach ($semester as $key) {
                # code...
                echo "<option value= '$key'>$key</option>";
            }
            ?>
        </select>
    </form>
</body>
</html>