<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Tarefas</h1>
        <form action="add_task.php" method="POST">
            <input type="text" name="task" placeholder="Nova Tarefa" required>
            <button type="submit">Adicionar</button>
        </form>

        <h2>Tarefas</h2>
        <ul>
        <?php include 'tasks.php'; ?>
        </ul>
    </div>
</body>
</html>
