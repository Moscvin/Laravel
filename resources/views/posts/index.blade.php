<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Page</title>
</head>
<body>
    <h1>Lista Posturilor</h1>

    <ul>
        <li>
            <a href="{{route('posts.show',['id'=>1])}}">Post 1</a>
            <a href="{{route('posts.edit',['id'=>1])}}">Edit</a>
                <form action="{{route ('posts.destroy',['id'=>1])}}" method="POST">
                @csrf
                @method('DELETE');
                <button type="submit">DELETE</button>
                </form>
        </li>
        <li>
            <a href="{{route('posts.show',['id'=>2])}}">Post 2</a>
            <a href="{{route('posts.edit',['id'=>2])}}">Edit</a>
            <form action="{{route ('posts.destroy',['id'=>2])}}" method="POST">
                @csrf
                @method('DELETE');
                <button type="submit">DELETE</button>
                </form>
        </li>

        <li>
            <a href="{{route('posts.show',['id'=>3])}}">Post 3</a>
            <a href="{{route('posts.edit',['id'=>3])}}">Edit</a>
            <form action="{{route ('posts.destroy',['id'=>3])}}" method="POST">
                @csrf
                @method('DELETE');
                <button type="submit">DELETE</button>
                </form>
        </li>
    </ul>
</body>
</html>
