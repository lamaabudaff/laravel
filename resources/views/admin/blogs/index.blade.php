<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>hello index</h1>
<form method="post" action="{{route('blogs.store')}}">
    @csrf
    <input type="text" name="title" placeholder="title">
    <textarea name="text" placeholder="text"></textarea>
    <input type="submit" >
<table border="1px">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Text</th>
        <th>created at</th>
        <th>updated at</th>
        <th>Action</th>
    </tr>
@foreach($blogs as $blog)
    <tr>
    <td>{{$blog->id}}</td>
    <td>{{$blog->title}}</td>
    <td>{{$blog->text}}</td>
    <td>{{$blog->created_at}}</td>
    <td>{{$blog->updated_at}}</td>
        <td>
        <a href="{{route('blogs.delete',$blog->id)}}">Delete</a>
        <a href="{{route('blogs.edit',$blog->id)}}">edit</a>

        </td>
    </tr>
    @endforeach
</table>
    {{$blogs->render()}}
</form>
</body>
</html>
