<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編輯 ToDo</title>
</head>
<body>
<h1>編輯 ToDo</h1>

<form action="{{ route('todos.update', $todo->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">標題：</label>
    <input type="text" id="title" name="title" value="{{ $todo->title }}"><br>
    <label for="content">內容：</label>
    <input type="text" id="content" name="content" value="{{ $todo->content }}">
    <button type="submit">更新</button>
</form>

<a href="{{ route('todos.index') }}">返回</a>
</body>
</html>
