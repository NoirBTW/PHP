<?php

    $host = 'localhost'; // Хост
    $username = 'root'; // Имя пользователя
    $password = ''; // Пароль
    $dbname = 'hashtag sorter'; // Имя базы данных
    $connect = new mysqli($host, $username, $password, $dbname);


    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    if(isset($data['fieldId'])){
        $fieldId = $data['fieldId'];
        // Обработка $fieldId по нашим нуждам
    } else {
        // обработка случая, если fieldId отсутствует
    }

    $sql = "SELECT h.id, h.hash_name FROM hashtags h INNER JOIN hash_connect hc ON h.id = hc.hash_id WHERE hc.field_id = '$fieldId'";
    $res = mysqli_query($connect, $sql);

    $selectedHashtags = array();
    while ($row = $res->fetch_assoc()) {
        $selectedHashtags[] = $row;
    }

    echo json_encode($selectedHashtags);    

?>