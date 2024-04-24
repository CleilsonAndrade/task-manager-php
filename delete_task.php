<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["index"])) {
    $index = $_GET["index"];
    $tasks = file("tasks.txt", FILE_IGNORE_NEW_LINES);
    if (isset($tasks[$index])) {
        unset($tasks[$index]);
        file_put_contents("tasks.txt", implode(PHP_EOL, $tasks));
    }
}
header("Location: index.php");
?>
