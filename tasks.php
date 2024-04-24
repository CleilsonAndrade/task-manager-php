<?php
if (file_exists("tasks.txt")) {
    $tasks = file("tasks.txt", FILE_IGNORE_NEW_LINES);
    foreach ($tasks as $index => $task) {
        echo "<li><span class='task'>$task</span> <a href='delete_task.php?index=$index' class='delete'>[X]</a></li>";
    }
}
?>