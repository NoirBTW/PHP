<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $str = 'aaab';
    $result = preg_replace('#a#', '!', $str);
    echo $result;
    echo '<br/>';

    $str = 'aa aba abba abbba abbbba abbbbba';
    $result = preg_match_all('#ab{4,}a#', $str, $matches); ;
    print_r($matches[0]);
    echo '<br/>';

    $str = 'aba aca aea abba adca abea';
    $result = preg_match_all('#abba|abea#', $str, $matches);
    print_r($matches[0]);
    echo '<br/>';

    $str = 'aae xxz 33a';
    $result = preg_replace('/(.)\1/', '!', $str);
    echo $result;
    ?>
</body>
</html>