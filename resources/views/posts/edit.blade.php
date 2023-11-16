<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Create Post</title>
</head>
<body>
   <form action="{{route('posts.update',['id'=>$id  ]) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name ="title">
    <button type="submit">Submit</button>
   </form>
</body>
</html>


