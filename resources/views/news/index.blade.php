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
<h1>welcome to page news</h1>
<form method="post" action="{{route('news.store')}}">
    @csrf
    <input type="text" name="title" placeholder="title">
    <textarea name="text" placeholder="text"></textarea>
    <input type="submit" >

</form>
<table border="1px">
    <tr>
    <th>ID</th>
    <th>Title</th>
    <th>Text</th>
    </tr>
    @foreach($news as $newsObject)
        <tr>
            <td>{{$newsObject->id}}</td>
            <td>{{$newsObject->title}}</td>
            <td>{{$newsObject->text}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
