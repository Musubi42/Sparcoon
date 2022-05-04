<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($tests as $test)
    <div>
        <h1>{{ $test->title }}</h1>
        <p>{{ $test->description }}</p>
    </div> 
    @endforeach
    
</body>
</html>