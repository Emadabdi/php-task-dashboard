<?php

class Task
{
    private $conn;
    private $table = 'tasks';

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getAll()
    {
        $query = "SELECT * FROM " . $this->table . " ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($title)
    {
        $query = "INSERT INTO " . $this->table . " (title) VALUES (:title)";
        $stmt = $this->conn->prepare($query);

        return $stmt->execute([
            ':title' => $title
        ]);
    }
}
