<html>
<head>
    <title>Todo List</title>
</head>

<body>
<h1>My first todo List</h1>
<ul>
    @foreach ($lists as $list)
        <p>{{ $list->title }} {{ ':' }} {{ $list->content }}</p>
    @endforeach
</ul>

</body>
</html>
