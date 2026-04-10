<?php
date_default_timezone_set('Europe/Chisinau');

/* ===== УСЛОВИЯ ===== */

$day = date('N');

// John Styles
$johnSchedule = ($day == 1 || $day == 3 || $day == 5)
    ? "8:00 - 12:00"
    : "Нерабочий день";

// Jane Doe
$janeSchedule = ($day == 2 || $day == 4 || $day == 6)
    ? "12:00 - 16:00"
    : "Нерабочий день";

echo "<h3>Расписание</h3>";
echo "<table border='1'>
<tr><th>№</th><th>Фамилия Имя</th><th>График</th></tr>
<tr><td>1</td><td>John Styles</td><td>$johnSchedule</td></tr>
<tr><td>2</td><td>Jane Doe</td><td>$janeSchedule</td></tr>
</table>";

/* ===== ЦИКЛЫ ===== */

echo "<h3>for</h3>";

$a = 0;
$b = 0;

for ($i = 0; $i <= 5; $i++) {
    $a += 10;
    $b += 5;
    echo "Шаг $i: a=$a, b=$b<br>";
}

echo "Итог: a=$a, b=$b<br><br>";

echo "<h3>while</h3>";

$a = 0;
$b = 0;
$i = 0;

while ($i <= 5) {
    $a += 10;
    $b += 5;
    echo "Шаг $i: a=$a, b=$b<br>";
    $i++;
}

echo "Итог: a=$a, b=$b<br><br>";

echo "<h3>do-while</h3>";

$a = 0;
$b = 0;
$i = 0;

do {
    $a += 10;
    $b += 5;
    echo "Шаг $i: a=$a, b=$b<br>";
    $i++;
} while ($i <= 5);

echo "Итог: a=$a, b=$b";