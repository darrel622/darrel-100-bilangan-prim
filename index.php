<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>100 Bilangan Prima Pertama</title>
</head>
<body>

    <h2>Finding the First 100 Prime Numbers</h2>

    <form action="index.php" method="POST">
        <button type="submit">Tampilkan Bilangan Prima</button>
    </form>

</body>
</html>

<?php
function IsThisNumberPrime($number) {
    if ($number < 2) {
        return false;
    }

    for ($j = 2; $j <= sqrt($number); $j++) {
        if ($number % $j == 0) {
            return false;
        }
    }

    return true;
}

$i = 2;
$count = 0;

echo "<h2>100 Bilangan Prima Pertama</h2>";

while ($count < 100) {
    if (IsThisNumberPrime($i)) {
        echo $i . " adalah bilangan prima<br>";
        $count = $count + 1;
    }

    if ($count >= 100) {
        break;
    }

    $i = $i + 1;
}
?>