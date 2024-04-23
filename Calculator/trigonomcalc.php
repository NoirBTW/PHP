<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="trig.css">
    <title>Тригонометрический калькулятор</title>
</head>
<body>
    <div class="div__main">
    <h1>Тригонометрический калькулятор</h1>
    <form method="post" class="form">
        <input type="text" name="number" placeholder="Введите число">
        <select name="function">
            <option value="sin">sin</option>
            <option value="cos">cos</option>
            <option value="tan">tan</option>
            <option value="ctg">ctg</option>
        </select>
        <input type="submit" value="Вычислить">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        $function = $_POST["function"];
        switch ($function) {
            case "sin":
                $result = sin(deg2rad($number));
                break;
            case "cos":
                $result = cos(deg2rad($number));
                break;
            case "tan":
                $result = tan(deg2rad($number));
                break;
            case "ctg":
                $result = 1 / tan(deg2rad($number));
                break;
            default:
                $result = "Неверная функция";
                break;
        }
        echo "<p>Результат: $result</p>";
    }
    ?>
    </div>
</body>
</html>