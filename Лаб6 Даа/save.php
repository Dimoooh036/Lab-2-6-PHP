<?php

/**
 * Очистка строки от XSS
 */
function clean($data) {
    return htmlspecialchars(trim($data));
}

$errors = [];

$author = clean($_POST['author'] ?? '');
$date = $_POST['date'] ?? '';
$mood = $_POST['mood'] ?? '';
$note = clean($_POST['note'] ?? '');
$sleep = $_POST['sleep'] ?? '';
$energy = $_POST['energy'] ?? [];

// Валидация
if (!$author) $errors[] = "Имя обязательно";
if (!$date) $errors[] = "Дата обязательна";
if (!$mood) $errors[] = "Настроение обязательно";
if (!$note) $errors[] = "Заметка обязательна";
if (!is_numeric($sleep)) $errors[] = "Сон должен быть числом";

if (!empty($errors)) {
    foreach ($errors as $e) {
        echo $e . "<br>";
    }
    exit;
}

// Данные
$data = [
    "author" => $author,
    "date" => $date,
    "mood" => $mood,
    "energy" => $energy,
    "sleep" => $sleep,
    "note" => $note,
    "created_at" => date('Y-m-d H:i:s')
];

// Сохранение
file_put_contents("data.txt", json_encode($data) . PHP_EOL, FILE_APPEND);

echo "Сохранено! <br><a href='index.php'>Назад</a>";