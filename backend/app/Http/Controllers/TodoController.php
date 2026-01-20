<?php

namespace App\Http\Controllers;

use App\Http\Requests\Todo\CreateTodoRequest;
use App\Http\Requests\Todo\UpdateTodoRequest;
use App\Services\TodoService;
use App\Traits\ApiResponse;
use Illuminate\Http\JsonResponse;

class TodoController extends Controller
{
    use ApiResponse;

    public function __construct(
        private TodoService $todoService
    ) {}

    public function index(): JsonResponse
    {
        $todos = $this->todoService->getTodos();

        return $this->success(
            $todos,
            'Todos retrieved successfully',
            200
        );
    }

    public function store(CreateTodoRequest $request): JsonResponse
    {
        $todo = $this->todoService->createTodo($request->validated());

        return $this->success(
            $todo,
            'Todo created successfully',
            201
        );
    }

    public function show(int $id): JsonResponse
    {
        $todo = $this->todoService->getTodo($id);

        return $this->success(
            $todo,
            'Todo retrieved successfully',
            200
        );
    }

    public function update(UpdateTodoRequest $request, int $id): JsonResponse
    {
        $todo = $this->todoService->updateTodo($id, $request->validated());

        return $this->success(
            $todo,
            'Todo updated successfully',
            200
        );
    }

    public function destroy(int $id): JsonResponse
    {
        $todo = $this->todoService->deleteTodo($id);

        return $this->success(
            $todo,
            'Todo deleted successfully',
            200
        );
    }
}
