<!DOCTYPE html>
<html>
<head>
    <title>My To-Do List</title>
</head>
<body>
    <h1>My Tasks</h1>

    <ul>
        @forelse ($tasks as $task)
            <li>{{ $task->title }}</li>
        @empty
            <li>No tasks yet.</li>
        @endforelse
    </ul>
</body>
</html>