<?php

namespace App\Services;

use App\Models\Todo;
use Illuminate\Support\Facades\Auth;

class TodoService
{
    public function createTodo(array $data): array
    {
        $todo = Todo::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'user_id' => Auth::id(),
        ]);

        return [
            'todo' => $todo,
        ];
    }

    public function updateTodo(int $id, array $data): array
    {
        $todo = Todo::where('user_id', Auth::id())->find($id);

        if (! $todo) {
            abort(404, 'Todo not found');
        }
        $todo->update($data);

        return [
            'todo' => $todo,
        ];
    }

    public function deleteTodo(int $id): array
    {
        $todo = Todo::where('user_id', Auth::id())->find($id);

        if (! $todo) {
            abort(404, 'Todo not found');
        }
        $todo->delete();

        return [
            'todo' => $todo,
        ];
    }

    public function getTodos(): array
    {
        $todos = Todo::where('user_id', Auth::id())->get();

        return [
            'todos' => $todos,
        ];
    }

    public function getTodo(int $id): array
    {
        $todo = Todo::where('user_id', Auth::id())->find($id);

        if (! $todo) {
            abort(404, 'Todo not found');
        }

        return [
            'todo' => $todo,
        ];
    }
}
