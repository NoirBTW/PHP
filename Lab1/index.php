<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

if (file_exists('old.txt')) {
    if (rename('old.txt', 'new.txt')) {
        echo "Файл успешно переименован.";
    } else {
        echo "Ошибка переименования файла.";
    }
} else {
    echo "Файл 'old.txt' не существует.";
}
?>

</body>
</html>