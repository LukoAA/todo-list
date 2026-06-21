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
            <li>{{ $task->title }}</li>
        @empty
            <li>No tasks yet.</li>
        @endforelse
    </ul>
</body>
</html>