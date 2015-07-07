<?php

namespace App\Http\Controllers\Todo;

use App\Http\Controllers\Controller;
use App\Models\Tasks;
use Illuminate\Http\Request;

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

    public function saveAction()
    {
        // @TODO need to disable CSRF protection for API requests


        $request = Request::capture();

        echo '<pre>';
        var_dump($request);
        die;
    }
}
