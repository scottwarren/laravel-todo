<?php

namespace App\Http\Controllers\Todo;

use App\Http\Controllers\Controller;
use App\Models\Tasks;

class TodoController extends Controller
{
    private $tasks;

    public function __construct()
    {
        $this->tasks = new Tasks();
    }

    public function showAllAction()
    {
        return view(
            'todo.allTasks',
            array(
                'tasks' => $this->tasks->findAll(),
            )
        );
    }

    public function showOneAction($id)
    {
        return view(
            'todo.task',
            array (
                'task' => $this->tasks->getTaskById($id),
                'id' => $id
            )
        );
    }
}
