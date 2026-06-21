<!DOCTYPE html>
<html>
<head>
    <title>My To-Do List</title>
</head>
<body>
    <h1>My Tasks</h1>
    
    <form action="/tasks" method="POST">
        @csrf
        <input type="text" name="title" placeholder="What needs doing?">
        <button type="submit">Add Task</button>
    </form>
    
    <ul>
        @forelse ($tasks as $task)
            <li>
                <form action="/tasks/{{ $task->id }}/toggle" method="POST" style="display:inline">
                    @csrf
                    @method('PATCH')
                    <button type="submit">
                        @if ($task->completed) ✅ @else ⬜ @endif
                    </button>
                </form>

                @if ($task->completed)
                    <s>{{ $task->title }}</s>
                @else
                    {{ $task->title }}
                @endif

                <form action="/tasks/{{ $task->id }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">🗑️</button>
                </form>
            </li>
        @empty
            <li>No tasks yet.</li>
        @endforelse
    </ul>
</body>
</html>