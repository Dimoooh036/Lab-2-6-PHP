<?php

$rows = file("data.txt", FILE_IGNORE_NEW_LINES);

$data = [];

foreach ($rows as $row) {
    $data[] = json_decode($row, true);
}

// Сортировка по дате
usort($data, function ($a, $b) {
    return strtotime($b['date']) - strtotime($a['date']);
});

?>

<table border="1">
<tr>
    <th>Имя</th>
    <th>Дата</th>
    <th>Настроение</th>
    <th>Сон</th>
    <th>Заметка</th>
</tr>

<?php foreach ($data as $item): ?>
<tr>
    <td><?= $item['author'] ?></td>
    <td><?= $item['date'] ?></td>
    <td><?= $item['mood'] ?></td>
    <td><?= $item['sleep'] ?></td>
    <td><?= $item['note'] ?></td>
</tr>
<?php endforeach; ?>

</table>

<a href="index.php">Назад</a>