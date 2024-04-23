<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $lang = 'en';
    $day = 7;

    $daysOfWeek = [
        'ru' => ['понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье'],
        'en' => ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday']
    ];

    if (array_key_exists($lang, $daysOfWeek)) {
        if (isset($daysOfWeek[$lang][$day - 1])) {
            echo $daysOfWeek[$lang][$day - 1];
        } else {
            echo 'Неверный номер дня недели';
        }
    } else {
        echo 'Неверный язык';
    }
    ?>
</body>

</html>