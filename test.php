<?
session_start();

if (!isset($_SESSION['timestamp'])) {
    $_SESSION['timestamp'] = time();
}

$currentTimestamp = time();
$elapsedSeconds = $currentTimestamp - $_SESSION['timestamp'];

echo "Вы зашли на сайт $elapsedSeconds секунд назад.";

// Обновление времени последнего захода при обновлении страницы
$_SESSION['timestamp'] = $currentTimestamp;

?>