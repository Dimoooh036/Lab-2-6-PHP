# Лабораторная работа №6

## Обработка и валидация форм в PHP

### Тема

Дневник настроения

### Модель данных

- author (string)
- date (date)
- mood (enum)
- energy (checkbox)
- sleep (number)
- note (text)
- created_at (date)

### Реализация

- HTML форма (POST)
- Валидация:
  - required
  - minlength
  - проверка чисел
- Защита:
  - htmlspecialchars (XSS)
- Хранение:
  - JSON в data.txt

### Функционал

- Добавление записи
- Сохранение в файл
- Вывод в таблицу
- Сортировка по дате

### Контрольные вопросы

**1. Методы отправки данных:**

- GET
- POST

HTML поддерживает:

- GET
- POST

**2. Глобальные переменные:**

- $_GET
- $_POST
- $_REQUEST

**3. Безопасность:**

- htmlspecialchars (XSS)
- валидация данных
- проверка типов