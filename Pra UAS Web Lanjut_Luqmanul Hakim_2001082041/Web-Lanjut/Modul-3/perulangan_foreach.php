<?php

$buku = array(
    'Flutter',
    'React Native',
    'Laravel',
    'CI'
);

echo "<pre>";
print_r($buku);
echo "</pre>";

foreach ($buku as $key => $value) {
    echo "Index ke $key, value adalah $value <br>";
}