<?php ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Дневник настроения</title>
</head>
<body>

<h2>Добавить запись</h2>

<form method="POST" action="save.php">
    Имя:
    <input type="text" name="author" required minlength="2"><br><br>

    Дата:
    <input type="date" name="date" required><br><br>

    Настроение:
    <select name="mood" required>
        <option value="good">Хорошее</option>
        <option value="normal">Нормальное</option>
        <option value="bad">Плохое</option>
    </select><br><br>

    Энергия:<br>
    <input type="checkbox" name="energy[]" value="low"> Низкая
    <input type="checkbox" name="energy[]" value="medium"> Средняя
    <input type="checkbox" name="energy[]" value="high"> Высокая
    <br><br>

    Сон (часы):
    <input type="number" name="sleep" min="0" max="24" required><br><br>

    Заметка:<br>
    <textarea name="note" required minlength="5"></textarea><br><br>

    <button type="submit">Сохранить</button>
</form>

<a href="list.php">Посмотреть записи</a>

</body>
</html>