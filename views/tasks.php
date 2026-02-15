<!DOCTYPE html>
<html>

<head>
    <title>Task Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 40px auto;
        }

        h1 {
            text-align: center;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="text"] {
            padding: 8px;
            width: 70%;
        }

        button {
            padding: 8px 12px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            padding: 8px;
            border-bottom: 1px solid #ccc;
        }
    </style>
</head>

<body>

    <h1>Task Dashboard</h1>

    <form method="POST" action="">
        <input type="text" name="title" placeholder="Enter task..." required>
        <button type="submit">Add Task</button>
    </form>

    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>
                <?= htmlspecialchars($task['title']) ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>