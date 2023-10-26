<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增 ToDo</title>
</head>
<body>
<h1>新增 ToDo</h1>

<form action="{{ route('todos.store') }}" method="POST">
    @csrf
    <label for="title">標題：</label>
    <input type="text" id="title" name="title"><br>
    <label for="content">內容：</label>
    <input type="text" id="content" name="content">
    <button type="submit">新增</button>
</form>

<a href="{{ route('todos.index') }}">返回</a>
</body>
</html>
