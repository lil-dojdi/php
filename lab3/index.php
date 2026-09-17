<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Циклы PHP</title>
</head>
<body>
<pre>

<?php

// ============================
// 1. Цикл for (с промежуточным выводом)
// ============================
echo "=== Цикл for ===\n\n";

$a = 0;
$b = 0;

for ($i = 0; $i <= 5; $i++) {
    $a += 10;
    $b += 5;
    echo "Шаг $i: a = $a, b = $b\n";
}

echo "End of the loop: a = $a, b = $b\n\n";

// ============================
// 2. Цикл while (эквивалент)
// ============================
echo "=== Цикл while ===\n\n";

$a = 0;
$b = 0;
$i = 0;

while ($i <= 5) {
    $a += 10;
    $b += 5;
    echo "Шаг $i: a = $a, b = $b\n";
    $i++;
}

echo "End of the loop: a = $a, b = $b\n\n";

// ============================
// 3. Цикл do-while (эквивалент)
// ============================
echo "=== Цикл do-while ===\n\n";

$a = 0;
$b = 0;
$i = 0;

do {
    $a += 10;
    $b += 5;
    echo "Шаг $i: a = $a, b = $b\n";
    $i++;
} while ($i <= 5);

echo "End of the loop: a = $a, b = $b\n\n";

?>

</pre>
</body>
</html>