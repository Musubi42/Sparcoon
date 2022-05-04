<!DOCTYPE html>
<html>

<head>
    <title>MyBlog</title>
</head>

<body>
    @foreach ($posts as $post)
        
    <h1>{{ $post->title }}</h1>
    <div>{{ $post->body }}</div>
    @endforeach
</body>

</html>
