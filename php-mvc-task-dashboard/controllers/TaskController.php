<?php

class TaskController
{
    private $taskModel;

    public function __construct()
    {
        $database = new Database();
        $db = $database->connect();

        $this->taskModel = new Task($db);
    }

    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'] ?? '';

            if (!empty($title)) {
                $this->taskModel->create($title);
                header("Location: /php-task-dashboard/public");
                exit;
            }
        }

        $tasks = $this->taskModel->getAll();
        require_once __DIR__ . '/../views/tasks.php';
    }
}
