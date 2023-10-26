<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List</title>
</head>
<body>
<h1>ToDo List</h1>

<ul>
    @foreach ($todos as $todo)
        <li>{{ $todo->title }} {{ ':' }} {{ $todo->content }} | <a href="{{ route('todos.edit', $todo->id) }}">編輯</a> | <a href="{{ route('todos.destroy', $todo->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $todo->id }}').submit();">刪除</a></li>
        <form id="delete-form-{{ $todo->id }}" action="{{ route('todos.destroy', $todo->id) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
    @endforeach
</ul>

<a href="{{ route('todos.create') }}">新增</a>
</body>
</html>
