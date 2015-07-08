<?php

namespace App\Http\Controllers\Todo;

use App\Http\Controllers\Controller;
use App\Models\Tasks;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class ApiController extends Controller
{
    private $tasks;

    public function __construct()
    {
        $this->tasks = new Tasks();
    }

    public function showAllAction()
    {
        return new JsonResponse(
            [
                'tasks' => $this->tasks->toArray(),
                'status' => 'success',
            ]
        );
    }

    public function showOneAction($id)
    {
        return new JsonResponse(
            [
                'task' => $this->tasks->getTaskById($id)->toArray(),
                'status' => 'success',
            ]
        );
    }

    public function saveAction()
    {
        return [];
    }
}
