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

@if($errors->any())
    <div class=" alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{route('blogs.update',$blog->id)}}">
    @csrf
    <input type="text" name="title" value="{{old('title') ?? $blog->title}}"placeholder="title">
    <textarea name="text" placeholder="text">{{old('text') ?? $blog->text}}</textarea>
    <input type="submit" value="update" >

</form>
</body>
</html>
