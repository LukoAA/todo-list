<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My To-Do List</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <main class="container">
        <h1>My Tasks</h1>

        <form action="/tasks" method="POST" class="add-form">
            @csrf
            <input type="text" name="title" placeholder="What needs doing?" autofocus>
            <button type="submit" class="btn-add">Add</button>
        </form>

        <ul class="task-list">
            @forelse ($tasks as $task)
                <li class="task {{ $task->completed ? 'is-done' : '' }}">
                    <form action="/tasks/{{ $task->id }}/toggle" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn-toggle">
                            @if ($task->completed) ✅ @else ⬜ @endif
                        </button>
                    </form>

                    <span class="task-title">{{ $task->title }}</span>

                    <form action="/tasks/{{ $task->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete">🗑️</button>
                    </form>
                </li>
            @empty
                <li class="empty">No tasks yet — add your first one above.</li>
            @endforelse
        </ul>
    </main>
</body>
</html>