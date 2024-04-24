<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["task"])) {
    $task = $_POST["task"];
    file_put_contents("tasks.txt", $task . PHP_EOL, FILE_APPEND);
}
header("Location: index.php");