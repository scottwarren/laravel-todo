<?php

namespace App\Models;

use App\Models\Task;

class Tasks {
    private $tasks;

    public function __construct()
    {
        // generate fake data for ease of development
        $stubTasks = $this->generateTasks();
        $this->setTasks($stubTasks);
    }

    public function setTasks($tasks)
    {
        $this->tasks = $tasks;
    }

    private function generateTasks()
    {
        return array(
            new Task(0, 'take trash out', false),
            new Task(1, 'buy milk', true),
            new Task(2, 'finish assignment for AOP101', false),
            new Task(3, 'top up go card', false),
        );
    }

    public function getTasks()
    {
        return $this->tasks;
    }

    public function getTaskById($id) {
        // convert string from the URL to an int
        $id = intval($id);
        $tasks = $this->getTasks();

        $selectedTask = null;

        foreach ($tasks as $task) {
            if ($task->getId() === $id) {
                $selectedTask = $task;
            }
        }

        return $selectedTask;
    }

    public function findAll() {
        return $this->getTasks();
    }

    public function toArray()
    {
        $tasks = [];

        foreach($this->getTasks() as $task) {
            $tasks[] = $task->toArray();
        }

        return $tasks;
    }
}
