<?php
session_start();
unset($_SESSION['sesi2041']);
unset($_SESSION['nama']);
session_destroy();
echo "<script>location='index.php';</script>";
?>