<?php

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/Task.php';
require_once __DIR__ . '/../controllers/TaskController.php';

$controller = new TaskController();
$controller->index();
