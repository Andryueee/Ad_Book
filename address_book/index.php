<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Адресная книга</title>
</head>
<body>
<h1>Добавить Новый Контакт</h1>
<form action="add_person.php" method="post">
    <label for="name">Имя:</label><br>
    <input type="text" id="name" name="name" required><br>
    <label for="phone">Номер телефона:</label><br>
    <input type="text" id="phone" name="phone" required><br>
    <label for="email">E-mail:</label><br>
    <input type="email" id="email" name="email"><br>
    <label for="address">Адрес проживания:</label><br>
    <textarea id="address" name="address"></textarea><br>
    <input type="submit" value="Добавить">
</form>

<h1>Найти в книге</h1>
<form action="search_person.php" method="get">
    <label for="search">Найти по имени:</label><br>
    <input type="text" id="search" name="search"><br>
    <input type="submit" value="Поиск">
</form>
</body>
</html>
